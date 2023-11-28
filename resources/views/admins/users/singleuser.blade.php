@extends('layouts.admin.main')
@section('admin-content')


    <style>
        .styled_col {
            border-bottom: solid 1px #d4d4d4;
            padding: 10px;
        }

        .styled_col.strong {

            color: #000000;

        }
    </style>

    <section id="main-content" class="">
        <section class="wrapper main-wrapper" style="">

            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="page-title">

                    <div class="float-left">
                        <h1 class="title">User Profile</h1>
                    </div>

                    <div class="float-right d-none">
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href="ui-pricing.html">Pages</a>
                            </li>
                            <li class="active">
                                <strong>Profile</strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>


            <style> 
            
            .user_profile .uprofile-image, .user_profile .uprofile-name {
                width: auto;
            }

            .user_profile .uprofile-image {
                margin-right: 10px;
            }

            .user_profile {
                display: flex;
                flex-direction: column
            }

            .form_item {
                display: flex;
                align-items: center;
                padding: 10px;
            }

            .form_item label {
                margin-bottom: 0;
                min-width: 80px;

            }

            .form_item input {
                border: solid 1px #d4d4d4;
                height: 50px;
                padding: 0 15px;
                border-radius: 10px;
                flex: 1
            }

            </style>


            <div class="col-xl-12">
                <section class="box nobox">
                    <div class="content-body">
                        @if ($singleUser['role_id'] == 5)
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 user_profile mb-5">
                                        <div class="uprofile-image">
                                            <img src="data/profile/user.png" class="img-fluid">
                                        </div>
                                        <div class="uprofile-name">
                                            <h3>
                                                <a href="#">
                                                    {{ $singleUser['first_name'] . ' ' . $singleUser['last_name'] }}
                                                </a>
                                                <!-- Available statuses: online, idle, busy, away and offline -->
                                                <span class="uprofile-status online"></span>
                                            </h3>
                                            {{-- <p class="uprofile-title">
                                            Web Developer
                                        </p> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-lg-6 form_item">
                                                    <label for="">Gender:</label>
                                                    <input type="text" disabled value="{{ $singleUser['gender'] }}">
                                                </div>
                                                <div class="col-lg-6 form_item"> 
                                                    <label for="">Email:</label>
                                                    <input type="text" disabled value="{{ $singleUser['email'] }}">
                                                </div>
                                                <div class="col-lg-6 form_item"> <label for="">Phone:</label>
                                                    <input type="text" disabled value="{{ $singleUser['mobile_number'] }}">
                                                </div>
                                                <div class="col-lg-6 form_item"><label for="">Address:</label>
                                                    <input type="text" disabled value="{{ $singleUser['address'] . ', ' . $singleUser['country'] . $singleUser['state'] . ', ' . $singleUser['city'] }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-12">
                                    <div class="uprofile-image">
                                        <img src="data/profile/user.png" class="img-fluid">
                                    </div>
                                    <div class="uprofile-name">
                                        <h3>
                                            <a href="#">
                                                {{ $singleUser['first_name'] . ' ' . $singleUser['last_name'] }}
                                            </a>
                                            <!-- Available statuses: online, idle, busy, away and offline -->
                                            <span class="uprofile-status online"></span>
                                        </h3>
                                        {{-- <p class="uprofile-title">
                                    Web Developer
                                </p> --}}
                                    </div>
                                    <div class="uprofile-info">
                                        <ul class="list-unstyled">
                                            <li>Gender:
                                                {{ $singleUser['gender'] }}
                                            </li>
                                            <li>Email: </i>
                                                {{ $singleUser['email'] }}
                                            </li>
                                            <li>Phone:
                                                {{ $singleUser['mobile_number'] }}
                                            </li>
                                            <li>Address:
                                                {{ $singleUser['address'] . ', ' . $singleUser['country'] . $singleUser['state'] . ', ' . $singleUser['city'] }}
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="col-lg-9 col-md-8 col-12 skzStlyi">
                                    @if (isset($singleUser['questions']))
                                        <div class="row">
                                            <div class="col-12">
                                                <h3>Application Questions</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <div class="uquest-info">
                                                    <div class="row">
                                                        <div class="col-6 styled_col strong">
                                                            Do you currently hold an active real estate license?
                                                        </div>
                                                        <div class="col-6 styled_col">
                                                            {{ $singleUser['questions']['active_license_status'] }}
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6 styled_col strong">
                                                            What is/are your license number(s)?
                                                        </div>
                                                        <div class="col-6 styled_col">
                                                            {{ $singleUser['questions']['license_number'] }}
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-6 styled_col strong">
                                                            How many residential real estate deals have you completed as an
                                                            agent?
                                                        </div>
                                                        <div class="col-6 styled_col ">
                                                            {{ $singleUser['questions']['deals_completed'] }}
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-6 styled_col strong">
                                                            Have you ever been disciplined by any local board of Realtors,
                                                            local
                                                            Realtor Association, the National Association of Realtors, or
                                                            any
                                                            other real estate association or governing body?
                                                        </div>
                                                        <div class="col-6 styled_col">

                                                            {{ $singleUser['questions']['real_estate_assoc_disciplined_status'] }}
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-6 styled_col strong">
                                                            Are you currently under investigation or is there a pending
                                                            charge
                                                            against you involving your real estate license?
                                                        </div>
                                                        <div class="col-6 styled_col">

                                                            {{ $singleUser['questions']['license_under_investigation_status'] }}
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-12">
                                                <div class="uquest-info">
                                                    <div class="row">
                                                        <div class="col-6 styled_col strong">
                                                            Do you have any restrictions on your real estate license?
                                                        </div>
                                                        <div class="col-6 styled_col">
                                                            {{ $singleUser['questions']['license_restriction_status'] }}
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6 styled_col strong">
                                                            Do you currently hold an active and unrestricted real estate
                                                            license? (Please note: An active real estate license is required
                                                            for
                                                            this role.)
                                                        </div>
                                                        <div class="col-6 styled_col ">

                                                            {{ $singleUser['questions']['license_unrestricted_status'] }}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 styled_col strong">
                                                            Are you a member of the following real estate associations?
                                                            Select
                                                            all that apply:
                                                        </div>
                                                        <div class="col-6 styled_col">
                                                            {{ $singleUser['questions']['real_estate_assoc_name'] }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    @endif
                                    @if (isset($singleUser['experince']))
                                        <div class="row">
                                            <div class="col-12">
                                                <br><br>
                                                <h5>Work Experience</h5>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Job Title</th>
                                                            <th scope="col">Company</th>
                                                            <th scope="col">From</th>
                                                            <th scope="col">To</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">
                                                                {{ $singleUser['experince']['job_title'] }}
                                                            </th>
                                                            <td>
                                                                {{ $singleUser['experince']['company'] }}
                                                            </td>
                                                            <td>
                                                                {{ $singleUser['experince']['from_date'] }}
                                                            </td>
                                                            <td>
                                                                {{ $singleUser['experince']['to_date'] }}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endif



                                    <div class="row">
                                        <div class="col-12">
                                            @if (isset($singleUser['education']) && count($singleUser['education']) > 0)
                                                <h5>Education</h5>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">School or University</th>
                                                            <th scope="col">Degree</th>
                                                            <th scope="col">Field of Study</th>
                                                            <th scope="col">Result OR GPA</th>
                                                            <th scope="col">From</th>
                                                            <th scope="col">To</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($singleUser['education'] as $myedu)
                                                            <tr>
                                                                <td>{{ $myedu['school_university'] }}</td>
                                                                <td>{{ $myedu['degree'] }}</td>
                                                                <td> {{ $myedu['study_field'] }}</td>
                                                                <td> {{ $myedu['overall_result'] }}</td>
                                                                <td> {{ $myedu['from_date'] }}</td>
                                                                <td> {{ $myedu['to_date'] }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="uexp-info">
                                                @if (isset($singleUser['skills']))
                                                    <h5>Skills</h5>
                                                    <ul>
                                                        <li>
                                                            <span>Skills: </span>
                                                            {{ $singleUser['skills']['skill'] }}
                                                        </li>
                                                        <li>
                                                            <span>Resume: </span>
                                                            {{ $singleUser['skills']['resume'] }}
                                                        </li>
                                                    </ul>
                                                @endif
                                                @if (isset($singleUser['languages']))
                                                    <h5>Languages</h5>
                                                    <ul>
                                                        <li>
                                                            <span>Language: </span>
                                                            {{ $singleUser['languages']['language'] }}
                                                        </li>
                                                        <li>
                                                            <span>Resume: </span>
                                                            {{ $singleUser['languages']['fluency_level'] }}
                                                        </li>
                                                    </ul>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif

                    </div>
                </section>
            </div>


        </section>
    </section>
@endsection
