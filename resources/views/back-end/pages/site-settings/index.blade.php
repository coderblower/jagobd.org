@extends('back-end.layouts.master')
@section('title', 'SiteInfo')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Create SiteInfo</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Site Settings</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create SiteInfo</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('site-setting.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Site Name Bangla</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="site_name_bn" required value="{{ $site_info->site_name_bn ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Site Name English</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="site_name_en" required value="{{ $site_info->site_name_en ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Email</label>
                                            <input type="email" class="form-control" id="exampleInputTitle" name="email" required
                                                 value="{{ $site_info->email ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Phone</label>
                                            <input type="text" class="form-control" id="exampleInputTitle" name="phone" required
                                             value="{{ $site_info->phone ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="3" placeholder="Address ..." name="address" required>{{ $site_info->address ?? '' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Map URL</label>
                                            <textarea class="form-control" rows="3" placeholder="Map url ..." name="map_url">{{ $site_info->map_url ?? '' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Site About Short Description (EN)</label>
                                            <textarea class="form-control" rows="3" 
                                                name="description_en">{{ $site_info->description_en ?? '' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Site About Short Description (BN)</label>
                                            <textarea class="form-control" rows="3" 
                                                name="description_bn">{{ $site_info->description_bn ?? '' }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Site Contact Short Description (EN)</label>
                                            <textarea class="form-control" rows="3" 
                                                name="contact_description_en">{{ $site_info->contact_description_en ?? '' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Site Contact Short Description (BN)</label>
                                            <textarea class="form-control" rows="3" 
                                                name="contact_description_bn">{{ $site_info->contact_description_bn ?? '' }}</textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">Site Logo</label><span style="font-weight: bold; color: red">
                                            *</span>
                                        <input name="logo" type="file" class="form-control">
                                        <input type="hidden" name="old_image" id=""
                                            value="{{ $site_info->logo ?? '' }}">
                                        @if ($site_info)
                                            @if ($site_info->logo)
                                                <img src="{{ asset($site_info->logo) }}" alt=""
                                                    class="img-fluid rounded img-thumbnail mt-2"
                                                    style="width: auto; height: 200px">
                                            @endif
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Site Favicon</label><span
                                            style="font-weight: bold; color: red"> *</span>
                                        <input name="favicon" type="file" class="form-control">
                                        <input type="hidden" name="old_image" id=""
                                            value="{{ $site_info->favicon ?? '' }}">
                                        @if ($site_info)
                                            @if ($site_info->favicon)
                                                <img src="{{ asset($site_info->favicon) }}" alt=""
                                                    class="img-fluid rounded img-thumbnail mt-2"
                                                    style="width: auto; height: 200px">
                                            @endif
                                        @endif
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Facebook Url</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="facebook_url"
                                                value="{{ $site_info->facebook_url ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Instagram Url</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="instagram_url"
                                                value="{{ $site_info->instagram_url ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Twitter Url</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="twitter_url" value="{{ $site_info->twitter_url ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Linkedin Url</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="linkedin_url"
                                                value="{{ $site_info->linkedin_url ?? '' }}">
                                        </div>
                                    </div>

                                </div>
                                


                                <div class="p-2 mb-2 bg-secondary text-dark"><h4 class="text-center">About Section Info</h4></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">About Section Subtitle (EN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="about_subtitle_en" 
                                                value="{{ $site_info->about_subtitle_en ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">About Section Subtitle (BN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="about_subtitle_bn" 
                                                value="{{ $site_info->about_subtitle_bn ?? '' }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="p-2 mb-2 bg-secondary text-dark"><h4 class="text-center">Notice Section Info</h4></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Notice Section title (EN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="notice_title_en" 
                                                value="{{ $site_info->notice_title_en ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Notice Section title (BN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="notice_title_bn" 
                                                value="{{ $site_info->notice_title_bn ?? '' }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="p-2 mb-2 bg-secondary text-dark"><h4 class="text-center">Download Forms Section Info</h4></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Form Section Title (EN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="form_sec_title_en" 
                                                value="{{ $site_info->form_sec_title_en ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Form Section Title (BN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="form_sec_title_bn" 
                                                value="{{ $site_info->form_sec_title_bn ?? '' }}">
                                        </div>
                                    </div>
                                </div>





                                <div class="p-2 mb-2 bg-secondary text-dark"><h4 class="text-center">Program Section Info</h4></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Program Section Subtitle (EN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="program_subtitle_en" 
                                                value="{{ $site_info->program_subtitle_en ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Program Section Subtitle (BN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="program_subtitle_bn" 
                                                value="{{ $site_info->program_subtitle_bn ?? '' }}">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Program Section Title (EN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="program_title_en" 
                                                value="{{ $site_info->program_title_en ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Program Section Title (BN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="program_title_bn" 
                                                value="{{ $site_info->program_title_bn ?? '' }}">
                                        </div>
                                    </div>



                                </div>


                                <div class="p-2 mb-2 bg-secondary text-dark"><h4 class="text-center">News Section Info</h4></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">News Section Subtitle (EN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="news_subtitle_en" 
                                                value="{{ $site_info->news_subtitle_en ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">News Section Subtitle (BN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="news_subtitle_bn" 
                                                value="{{ $site_info->news_subtitle_bn ?? '' }}">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">News Section Title (EN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="news_title_en" 
                                                value="{{ $site_info->news_title_en ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">News Section Title (BN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="news_title_bn" 
                                                value="{{ $site_info->news_title_bn ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 mb-2 bg-secondary text-dark"><h4 class="text-center">Video Section Info</h4></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Video Section Subtitle (EN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="video_subtitle_en" 
                                                value="{{ $site_info->video_subtitle_en ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Video Section Subtitle (BN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="video_subtitle_bn" 
                                                value="{{ $site_info->video_subtitle_bn ?? '' }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Video Section Title (EN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="video_title_en" 
                                                value="{{ $site_info->video_title_en ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Video Section Title (BN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="video_title_bn" 
                                                value="{{ $site_info->video_title_bn ?? '' }}">
                                        </div>
                                    </div>

                                    
                                </div>
                                <div class="p-2 mb-2 bg-secondary text-dark"><h4 class="text-center">Member Section Info</h4></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Member Section Subtitle (EN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="member_subtitle_en" 
                                                value="{{ $site_info->member_subtitle_en ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Member Section Subtitle (BN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="member_subtitle_bn" 
                                                value="{{ $site_info->member_subtitle_bn ?? '' }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Member Section Title (EN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="member_title_en" 
                                                value="{{ $site_info->member_title_en ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Member Section Title (BN)</label>
                                            <input type="text" class="form-control" id="exampleInputTitle"
                                                name="member_title_bn" 
                                                value="{{ $site_info->member_title_bn ?? '' }}">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#side-settings").addClass('active');
        });

    </script>
@endsection
