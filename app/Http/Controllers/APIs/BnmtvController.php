<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use App\Models\Bnmtv;
use App\Models\BnmtvLike;
use App\Models\Comment;
use App\Models\CommentLike;
use App\Models\Reply;
use App\Models\ReplyLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BnmtvController extends Controller
{
    public function index()
    {
        $bnmtvs = Bnmtv::where('status', 1)
            ->get()
            ->map(function ($bnmtv) {
                // Fetch user information
                $user_info = DB::table('users')
                    ->leftJoin('profiles', 'users.member_id', '=', 'profiles.member_id')
                    ->leftJoin('organizations', 'users.organization_id', '=', 'organizations.id')
                    ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
                    ->leftJoin('committees', 'users.committee_id', '=', 'committees.id')
                    ->where('users.id', $bnmtv->user_id) 
                    ->select(
                        'users.id', 
                        'users.name_en as name_en',
                        'users.name_bn as name_bn',
                        'profiles.profile_photo',
                        'positions.name_en as positions_en',
                        'positions.name_en as positions_bn',
                        'committees.name_en as committee_en',
                        'committees.name_bn as committee_bn',
                        'organizations.name_en as org_en',
                        'organizations.name_bn as org_bn'
                    )
                    ->first();

                // Assign user information to the Bnmtv object
                $bnmtv->uploader_user_info = $user_info;

                return $bnmtv;
            });

        return response()->json([
            'status' => 'success',
            'data' => $bnmtvs,
            'message' => 'Bnmtv List Retrieved Successfully',
        ], 200);
    }


    public function commentindex(Request $request)
    {
        // Validate the request
        $request->validate([
            'bnmtv_id' => 'required|exists:bnmtvs,id', // Ensure bnmtv_id exists in bnmtvs table
        ]);

        // Retrieve bnmtv_id from the request
        $bnmtv_id = $request->input('bnmtv_id');

        // Fetch comments for the specified Bnmtv post with user information
        $comments = Comment::where('bnmtv_id', $bnmtv_id)
            ->with(['user' => function ($query) {
                $query->leftJoin('profiles', 'users.member_id', '=', 'profiles.member_id')
                    ->leftJoin('organizations', 'users.organization_id', '=', 'organizations.id')
                    ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
                    ->leftJoin('committees', 'users.committee_id', '=', 'committees.id')
                    ->select(
                        'users.id', 
                        'users.name_en as name_en',
                        'users.name_bn as name_bn',
                        'profiles.profile_photo',
                        'positions.name_en as positions_en',
                        'positions.name_en as positions_bn',
                        'committees.name_en as committee_en',
                        'committees.name_bn as committee_bn',
                        'organizations.name_en as org_en',
                        'organizations.name_bn as org_bn'
                    );
            }])
            ->orderBy('created_at', 'desc') // Order comments by created_at descending
            ->get();

        // Return JSON response with comments
        return response()->json([
            'status' => 'success',
            'data' => $comments,
            'message' => 'Comments retrieved successfully for Bnmtv post.',
        ], 200);
    }


    public function replyindex(Request $request)
    {
        // Validate the request
        $request->validate([
            'comment_id' => 'required|exists:comments,id', // Ensure comment_id exists in comments table
        ]);

        // Retrieve comment_id from the request
        $comment_id = $request->input('comment_id');

        // Fetch replies for the specified comment with user information
        $replies = Reply::where('comment_id', $comment_id)
            ->with(['user' => function ($query) {
                $query->leftJoin('profiles', 'users.member_id', '=', 'profiles.member_id')
                    ->leftJoin('organizations', 'users.organization_id', '=', 'organizations.id')
                    ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
                    ->leftJoin('committees', 'users.committee_id', '=', 'committees.id')
                    ->select(
                        'users.id', 
                        'users.name_en as name_en',
                        'users.name_bn as name_bn',
                        'profiles.profile_photo',
                        'positions.name_en as positions_en',
                        'positions.name_en as positions_bn',
                        'committees.name_en as committee_en',
                        'committees.name_bn as committee_bn',
                        'organizations.name_en as org_en',
                        'organizations.name_bn as org_bn'
                    );
            }])
            ->orderBy('created_at', 'desc') // Order replies by created_at descending
            ->get();

        // Return JSON response with replies
        return response()->json([
            'status' => 'success',
            'data' => $replies,
            'message' => 'Replies retrieved successfully for comment.',
        ], 200);
    }



    public function store(Request $request)
    {

        $userId = Auth::id();

        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'title_en' => 'nullable|string',
            'title_bn' => 'nullable|string',
            'description_en' => 'nullable|string',
            'description_bn' => 'nullable|string',
            'video_url' => 'nullable|string',
            'video_path' => 'nullable|string',
            'thumbnail_url' => 'nullable|string',
            'like' => 'nullable|integer',
            'status' => 'nullable|boolean',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()->all()
            ], 422);
        }

        // Create a new Bnmtv instance
        $bnmtv = new Bnmtv();
        $bnmtv->user_id = $userId;
        $bnmtv->title_en = $request->input('title_en');
        $bnmtv->title_bn = $request->input('title_bn');
        $bnmtv->description_en = $request->input('description_en');
        $bnmtv->description_bn = $request->input('description_bn');
        $bnmtv->video_url = $request->input('video_url');
        $bnmtv->video_path = $request->input('video_path');
        $bnmtv->thumbnail_url = $request->input('thumbnail_url');
        $bnmtv->like = $request->input('like', 0);
        $bnmtv->status = $request->input('status', 0);

        // Save the Bnmtv instance
        try {
            $bnmtv->save();
        } catch (\Exception $e) {
            // Handle any exceptions if saving fails
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to store Bnmtv',
                'error' => $e->getMessage(),
            ], 500);
        }

        // Return success response
        return response()->json([
            'status' => 'success',
            'data' => $bnmtv,
            'message' => 'Bnmtv stored successfully',
        ], 201);
    }


    public function commentstore(Request $request)
    {
        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'bnmtv_id' => 'required|exists:bnmtvs,id',
            'content' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()->all()
            ], 422);
        }

        // Get authenticated user's ID
        $userId = Auth::id();

        // Create a new Comment instance
        $comment = new Comment();
        $comment->bnmtv_id = $request->input('bnmtv_id');
        $comment->user_id = $userId;
        $comment->content = $request->input('content');
        $comment->like = 0; // Default value
        
        // Save the comment instance
        try {
            $comment->save();
        } catch (\Exception $e) {
            // Handle any exceptions if saving fails
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to store comment',
                'error' => $e->getMessage(),
            ], 500);
        }

        // Return success response
        return response()->json([
            'status' => 'success',
            'message' => 'Comment stored successfully',
            'data' => $comment,
        ], 201);
    }


    public function replystore(Request $request)
    {
        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'comment_id' => 'required|exists:comments,id',
            'content' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()->all()
            ], 422);
        }

        // Get authenticated user's ID
        $userId = Auth::id();

        // Create a new Reply instance
        $reply = new Reply();
        $reply->comment_id = $request->input('comment_id');
        $reply->user_id = $userId;
        $reply->content = $request->input('content');
        $reply->like = 0; // Default value
        
        // Save the reply instance
        try {
            $reply->save();
        } catch (\Exception $e) {
            // Handle any exceptions if saving fails
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to store reply',
                'error' => $e->getMessage(),
            ], 500);
        }

        // Return success response
        return response()->json([
            'status' => 'success',
            'message' => 'Reply stored successfully',
            'data' => $reply,
        ], 201);
    }


    public function bnmtvslikestore(Request $request)
    {
        $userId = Auth::id();
        $bnmtvId = $request->input('bnmtv_id');

        // Check if the user has already liked this bnmtv
        $existingLike = BnmtvLike::where('user_id', $userId)
                                ->where('bnmtv_id', $bnmtvId)
                                ->first();

        $bnmtv = Bnmtv::find($bnmtvId);

        if (!$bnmtv) {
            return response()->json([
                'status' => 'error',
                'message' => 'Bnmtv not found',
            ], 404);
        }

        if ($existingLike) {
            // Unlike if already liked
            $existingLike->delete();
            $bnmtv->decrement('like');
            $message = 'Unliked Bnmtv successfully';
        } else {
            // Like if not liked
            $like = new BnmtvLike();
            $like->user_id = $userId;
            $like->bnmtv_id = $bnmtvId;
            $like->save();

            $bnmtv->increment('like');
            $message = 'Liked Bnmtv successfully';
        }

        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $bnmtv->fresh()->like,
        ]);
    }


    public function commentlikestore(Request $request)
    {
        $userId = Auth::id();
        $commentId = $request->input('comment_id');

        // Check if the user has already liked this comment
        $existingLike = CommentLike::where('user_id', $userId)
                                ->where('comment_id', $commentId)
                                ->first();

        $comment = Comment::find($commentId);

        if (!$comment) {
            return response()->json([
                'status' => 'error',
                'message' => 'Comment not found',
            ], 404);
        }

        if ($existingLike) {
            // Unlike if already liked
            $existingLike->delete();
            $comment->decrement('like');
            $message = 'Unliked Comment successfully';
        } else {
            // Like if not liked
            $like = new CommentLike();
            $like->user_id = $userId;
            $like->comment_id = $commentId;
            $like->save();

            $comment->increment('like');
            $message = 'Liked Comment successfully';
        }

        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $comment->fresh()->like,
        ]);
    }

    public function replylikestore(Request $request)
    {
        $userId = Auth::id();
        $replyId = $request->input('reply_id');
    
        // Check if the user has already liked this reply
        $existingLike = ReplyLike::where('user_id', $userId)
                                 ->where('reply_id', $replyId)
                                 ->first();
    
        $reply = Reply::find($replyId);
    
        if (!$reply) {
            return response()->json([
                'status' => 'error',
                'message' => 'Reply not found',
            ], 404);
        }
    
        if ($existingLike) {
            // Unlike if already liked
            $existingLike->delete();
            $reply->decrement('like');
            $message = 'Unliked Reply successfully';
        } else {
            // Like if not liked
            $like = new ReplyLike();
            $like->user_id = $userId;
            $like->reply_id = $replyId;
            $like->save();
    
            $reply->increment('like');
            $message = 'Liked Reply successfully';
        }
    
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $reply->fresh()->like,
        ]);
    }
    

    

    public function destroy($id)
    {
        $bnmtv = Bnmtv::find($id);
        if (!$bnmtv) {
            return response()->json(['message' => 'Video not found'], 404);
        }

        if ($bnmtv->video_path) {
            Storage::disk('public')->delete($bnmtv->video_path);
        }

        $bnmtv->delete();

        return response()->json(['message' => 'Video deleted successfully'], 200);
    }
}
