<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="../assets/css/email.css"> --}}
</head>
    <style>
        html{
            height: 100%;
            text-align: center;
        }
        body{
          margin: 0;
          padding:0;
          width: 100%;
          height:100%;
          display: block;
          text-align: center;
          align-items: center;
          justify-content: center;
          font-family: Arial, Helvetica, sans-serif;
        }
        section{
          box-shadow: 0 0 4px 1px #929292e3;
          background: #ffffff;
          border-radius: 5px;
          align-items: center;
          justify-content: center;
          padding: 5px;
          margin: 10px 0;
        }
        li{
          font-size: 14px;
          color: rgba(75, 74, 74, 0.925);
        }

        @media only screen and (max-width: 560px) {
          li{
              font-size: 10px;
          }
        }
        .email_logo{
          display: block;
          width: 100%;
          max-height: 80px ;
          justify-content: center;
          align-items: center;
          padding: 10px;
          margin:20px auto;  
          box-shadow: inset 0 0 4px 1px #929292e3;
          background: #ffffff;
        
        }
        .logo{
            font-size: 26px;
            text-transform: uppercase;
            font-weight: bold;
            text-align: center;
            color: #0c5572;
        }

        .page_container{
          max-width: 80em;
          height: max-content;
          margin:auto;
          padding:1em; 
          display: block;
          justify-content: center;
          align-items: center;
          border-radius: 10px;
          background: #ffffff;
        
        }

        .request_type{
          font-size: 25px;
          margin: 10px 0;
          display: flex;
          justify-content: center;
          text-align: center;
          width: 100%;
          text-transform: uppercase;
          font-weight: bolder;
          color: rgba(41, 41, 41, 0.87);
        }
        @media only screen and (max-width: 560px) {
          .request_type{
              font-size: 14px;
              margin: 0;
          }
        }
        .first_half{
          display: grid;
          width: 100%;
          padding: 0;
          grid-template-columns: auto auto auto;
          border: 1px solid rgba(75, 74, 74, 0.925);
          background: #ffffff;
          border-radius: 5px;
        }
        .second_half{
          display: grid;
          width: 100%;
          padding: 0;
          background: #ffffff;
          border-radius: 5px;
          margin-top:5px;
        }
        .data_table{
          display:block;
          width: 100%;
          height: fit-content;
        }
        .label{
          width: 100%;
          height: auto;
          padding: 5px 10px;
          text-align: left;
          color: rgba(78, 78, 78, 0.815);
          font-size: 16px;
          font-weight: bold;
        }

        @media only screen and (max-width: 560px) {
          .label{
              font-size: 12px;
          }
        }
        .data_line{
          display: grid;
          grid-template-columns: minmax(5em,35em) auto;
          grid-gap: 10px;
          margin: 5px 0;
          padding: 1px 10px;
          border: 1px solid rgba(75, 74, 74, 0.925);
          border-radius: 5px;
        }

        .data_line div{
          color: rgba(75, 74, 74, 0.925);
          font-size: 14px; 
          margin: auto 0;
          text-align: left;
        }
        @media only screen and (max-width: 560px) {
          .data_line div{
              font-size: 12px;
          }
        }
        .answers{
            font-weight: bold;
            color:#0c5572;
        }

        .text{
          line-height: 1.6;
          font-size: 16px;
          color: rgba(75, 74, 74, 0.925);
        }
        @media only screen and (max-width: 560px) {
          .text{
              font-size: 12px;
          }
        }

        .footer{
          width: 100%;   
          height: 50px;
          align-items: center;
          justify-content: center;
          display: flex;
          margin:auto;
          background: #cbecdf; 
        }
        .footer span{ 
          color: rgba(75, 74, 74, 0.925);
          font-size: 12px;
          width: 100%; 
        }

        @media only screen and (max-width: 560px) {
          .footer span{
              font-size: 10px;
          }
        }

    </style>
<body>

    
    {{-- header --}}
    <div class="email_logo">
        <div class="logo">{{ config('app.name') }}</div>
        {{-- <img src="../assets/images/logoo.png" alt="SM-DEVIS"> --}}
    </div>
    {{-- /header --}}
    @yield('content')
    {{--footer--}}
    <div class="footer">
        <span>Copyright © {{ now()->year }} {{ config('app.name') }} .</span>
    </div>
</body>
</html>
