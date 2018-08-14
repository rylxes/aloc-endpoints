<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />


    <title>ALOC APIs</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            /*font-family: 'Raleway', sans-serif;*/
            font-family: system-ui, BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
            color: #22292F;
            line-height: 1.5;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        p, ul{
            /*font-family: sans-serif;*/
        }

        .full-height {
            height: 70vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }
        .support{
            background-color: #f3edde;
            padding: 20px;

        }

        .description{
            background-color: #fff;
            padding: 20px;
            margin-bottom: 4rem;
            max-width: 60rem;
            margin: auto;
            padding: 1rem;

        }

        .title {
            font-size: 55px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                    @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                7,000 past questions
            </div>

            <div class="links">
                <a href="">JAMB</a>
                <a href="">WAEC</a>
                <a href="">NECO</a>
                <a href="">POST-UTME</a>
                <a href="https://aloc.ng">ALOC Games</a>
            </div>

            <p>Make api calls to get major Nigeria exams past questions. 100% FREE</p>

            <h3>Focus on building great apps for students with unlimited access to trivial questions of major exams in Nigeria</h3>

        </div>



    </div>
    <div class="support content ">
        <h4>Supported by</h4>
        <a href="https://aloc.ng"><img src="{{url('assets/aloc-shield.png')}}"></a>
        <p><i>Get Inspired to Practice</i></p>
    </div>
    <div class="description ">
        <h3>Intro</h3>
        <p>Some where in my brain, i felt our questions were sit sitting too idle so we decided to open its APIs end points.  Developers and education stakeholders can use these questions to develop interesting apps for students</p>

        <h3>Supported Subjects</h3>
        <p>We currently support 16 subjects namely
            <ul>
                <li>English language</li>
                <li>Mathematics</li>
                <li>Commerce</li>
                <li>Accounting</li>
                <li>Biology</li>
                <li>Physics</li>
                <li>Chemistry</li>
                <li>English literature</li>
                <li>Government</li>
                <li>Christ Religious Knowledge</li>
                <li>Geography</li>
                <li>Economics</li>
                <li>Islamic Religious Knowledge</li>
                <li>Civil Education</li>
                <li>Insurance</li>
                <li>Current Affairs</li>
                <li>History</li>
             </ul>
        </p>

        <h3>Exam supported</h3>
        <p>We have questions for four major exams in Nigeria</p>
        <ul>
            <li>JAMB</li>
            <li>WAEC (limited)</li>
            <li>NECO (limited) </li>
            <li>Post-UTME (very limited)</li>
        </ul>


        <h3>Years Supported</h3>
        <p>This depends on the subject, but please note, the years varies from 2001 to 2013</p>

        <h3>URL parameters</h3>
        <p>You can supply subject, type and year to the API URL</p>
        <p><strong>subject</strong> = english, mathematics , commerce , account, biology , physics, chemistry, englishlit, government, crk, geography, economics, irk, civiledu, insurance, currentaffairs, history</p>
        <p><strong>type</strong> = jamb, waec, neco, post-utme</p>
        <p><strong>year</strong> = 2001, 2002, 2003...</p>

        <h3>API call Examples</h3>
        <p><strong>Get a question</strong></p>
        <p>https://questions.aloc.ng/api/q?subject=account</p>

        <p><strong>Get several questions</strong></p>
        <p>https://questions.aloc.ng/api/q/7?subject=account</p>

        <p><strong>Get a question by year</strong></p>
        <p>https://questions.aloc.ng/api/q?subject=account&year=2013</p>

        <p><strong>Get a question by exam type</strong></p>
        <p>https://questions.aloc.ng/api/q?subject=account&type=jamb</p>


        <p><strong>Get a question by type and year</strong></p>
        <p>https://questions.aloc.ng/api/q?subject=account&year=2013&type=waec</p>
    </div>
    <div class="support content">
        <p>Built with love by Team ALOC</p>
        <p>info@aloc.ng</p>
        <p>Copyright © <?php echo date('Y'); ?> MaSSive Teck</p>
    </div>
</body>
</html>
