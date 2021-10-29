<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


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
          /* display: block; */
          text-align: center;
          font-family: Arial, Helvetica, sans-serif;
          background-color: rgb(192, 192, 192);
        }
        section{
          border: 1px solid rgb(141, 141, 141) ;
          background-color: #ffffff;
          /* border-radius: 5px; */
          text-align: center;
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
          max-height: 400px ;
          text-align: center;
          padding: 10px 0;
          margin:20px auto;  
        }

       

        .img{
          
          width: 100%;
          height: 400px;
          
        }

        @media only screen and (max-width: 560px) {
        .email_logo{
          display: block;
          width: 100%;
          max-height: 260px ;
          text-align: center;
          padding: 10px 0;
          margin:20px auto;  
        }

        .img{
          
          width: 100%;
          height: 260px;
          
        }
        }

        .buttom_logo{
          /* display: block; */
          width: 100%;
          max-height: 150px ;
          text-align: left;
          padding: 10px 0;
          margin:auto 20px;  
        }

        .img2{
  
          width: 150px;
          height: 150px;
          
        }

        .logo{
            font-size: 26px;
            text-transform: uppercase;
            font-weight: bold;
            text-align: center;
            color: #0c5572;
        }

        .page_container{
          max-width: 800px;
          height: max-content;
          margin: auto;
          padding:0 20px; 
          display: block;
          text-align: center;
          background-color: #ffffff;
        
        }

        .request_type{
          font-size: 25px;
          margin: 10px 0;
          text-align: center;
          width: 100%;
          font-weight: bolder;
          color: rgba(8, 8, 8, 0.87);
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
          background-color: #ffffff;
          /* border-radius: 5px; */
        }
        .second_half{
          display: grid;
          width: 100%;
          padding: 0;
          background-color: #ffffff;
          /* border-radius: 5px; */
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
          padding: 5px 0;
          text-align: left;
          color: rgba(8, 8, 8, 0.87);
          font-size: 16px;
          font-weight: bolder;
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
          /* border-radius: 5px; */
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
          text-align: left;
          padding: 0 20px;
          font-size: 16px;
          color: rgba(75, 74, 74, 0.925);
        }
        @media only screen and (max-width: 560px) {
          .text{
              font-size: 12px;
          }
        }

        .list{
          margin:0 50px ;
          line-height: 1.6;
          text-align: left;
          padding: 10px 20px;
          font-size: 16px;
        }

        .link{
          color: #0c5572;
          font-weight :bolder;
          text-align: left;
          font-size: 16px;
        }
        @media only screen and (max-width: 560px) {
          .link{
              font-size: 12px;
          }
        }

        .footer{
          width: 100%;
          height: max-content;
          line-height: 1.6;
          text-align: center;
          background-color: rgb(236, 236, 236);
        }

        .contacts{
          display: inline-flex;
          gap: 12px;
          margin-bottom: 20px;
        }

        .contact_logo{
          width: max-content;
          padding: 5px;
          margin: 10px;
          text-align: center;
          height: max-content;
          background-color: rgb(190, 190, 190);
        }

    </style>
<body>
    @yield('content')
</body>
</html>
