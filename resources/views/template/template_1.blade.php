<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Invoice</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .text-right {
            text-align: right;
        }
        .name{
            font-size: 25px;
            color: #1f53ef;
            font-weight: 700;
            margin-top: 20px;
            margin-bottom: 0px;

        }
        .head{
          height: 70px;
          background-color: #F5F5F5;
          width: 100%;
        }
        .head img{
          margin-left: 80%;
        }
        .head_detail {
          width: 100%;
          height: 200px;
          margin-top:10px;
        }
        .profile_pic {
          width: 23%;
          height: 200px;
        }
        .profile_pic img {
          border: 5px solid #F5F5F5;
          border-radius: 100%;
          width: 140px;
          height: 140px;
          margin-top: 0px;
          margin-left: 3%;
        }
        .details {
          height: 200px;
          position: relative;
          top: -220px;
          left: 25%;
          width: 74%;
          padding-left: 10px;
        }
        .details strong {
          font: 1em sans-serif;
          margin-bottom: 10px;
        }

        p {
          width: 100%;
          margin-bottom: -13px;
          font-size: 15px;

        }
        p strong {
          color: #000000;
          font-weight: 700;

        }
       hr{
        margin-top: -20px;
        border: 1px solid #5a5a5a;
       }

    </style>

</head>
<body class="login-page" style="background: white">

        <div class="head">
            <img src="{{$pic_logo}}" alt="" height="70px">
        </div>
        <div class="head_detail">
            <div class="profile_pic">
                <img src="{{$pic_profile}}" alt="">
            </div>
            <div class="details">
                <h3 class="name">{{auth()->user()->name}}</h3>
                <div style="margin-top: 0px;">
                    <p> <b>Nationality:</b> {{$personal_detail->nationality}}&nbsp;&nbsp; <b>Phone:</b> {{$personal_detail->phone}}  <b> Date of Birth: </b>  {{$personal_detail->date_of_birth}}</p>
                    <p> <b>Email:</b> {{auth()->user()->email}}</p>
                    <p> <b>Address:</b> {{$personal_detail->address}}, {{$personal_detail->city}}, {{$personal_detail->state}}, ({{$personal_detail->nationality}})</p>
                    @foreach ($socials as $social)
                        <p> <b>{{$social->social_name}} : </b> <a href="{{$social->social_link}}">{{$social->social_link}}</a> </p>
                    @endforeach
                </div>
            </div>
      </div>

        <div class="row">
            <div class="col-xs-12">
                <h4 style="color: #1f53ef">ABOUT ME</h4><hr>
                <p>
                    {{$personal_detail->bio}}
                </p>
            </div><br>
            
            <div class="col-xs-12"> 
                <h4 style="color: #1f53ef">WORK EXPERIENCE</h4><hr>
                @foreach ($experiences as $experience)
                <h5 style="font-size: 15px; color: #1f53ef;">{{$experience->exp_position}}Software engineer</h5>
                <h5 style="margin-top: -20px; font-size:16px; font-style:italic; color:#8c8c8c">{{$experience->exp_company}}O' Bounce Technologies</h5>
                <div style="margin-top: -30px;">
                    <p style="">City: <span>{{$experience->exp_city}}jhjh</span></p>
                    <p style="">Country: <span>{{$experience->exp_country}}jhjhjh</span></p>
                </div>
                <p>
                    {{$personal_detail->exp_discription}}
                </p>

                @endforeach
            </div>
            <div class="col-xs-12" style="margin-top: 25px;"> 
                <h4 style="color: #1f53ef">EDUCATION AND TRAINING</h4><hr>
                @foreach ($educations as $education)
                <h5 style="font-size: 17px; color: #1f53ef;">{{$education->edu_degree}}</h5>
                <h5 style="margin-top: -20px; font-size:16px; font-style:italic; color:#8c8c8c">{{$education->edu_school}}</h5>
                <div style="margin-top: -30px;">
                    <p style="">Address: <span>{{$education->edu_address}}, {{$education->edu_zip}}, {{$education->edu_city}}, ({{$education->edu_nationality}})</span></p>
                    <p style="font-style:italic;"><a href="{{$education->edu_school_url}}">{{$education->edu_school_url}}</a></p>
                </div>
                <p style="margin-bottom: 10px;">
                    {{$personal_detail->exp_discription}}
                </p>
                
                @endforeach
            </div>
            <div class="col-xs-12" style="margin-top: 25px;"> 
                <h4 style="color: #1f53ef">DIGITAL SKILLS</h4><hr>
                <h5 style="font-size: 17px; color: #1f53ef;">My Digital Skills</h5>
                <p style="margin-bottom: 10px; margin-top: -20px;"> 
                    @foreach ($skills as $skill)
                        {{$skill->skill}} / 
                    @endforeach
                </p>
                
               
            </div>
        </div>
            <div style="margin-bottom: 0px">&nbsp;</div>

    </body>
    </html>