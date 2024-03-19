@extends('layouts.app')
@section('title', 'Bus')
@section('styles')
    <style>
        .slider {
            width: 90%;
            margin: 100px auto;
        }
        .slick-slide {
            margin: 0px 20px;
        }
        .slick-slide img {
            width: 100%;
        }
        .slick-prev:before,
        .slick-next:before {
            color: black;
        }
        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: .2;
        }
        .slick-active {
            opacity: .5;
        }
        .slick-current {
            opacity: 1;
        }
        .slick-prev:before,
        .slick-next:before {
            color: #3482f5 !important;
        }
        .slick-center .currents {
            font-size: 12px;
            background: #3482f5;
            color: white;
            height: 50px;
            display: flex;
            align-items: center;
        }
        .slick-slide {
            font-size: 12px;
            height: 50px;
            display: flex !important;
            align-items: center;
            padding: 0 7px;
        }
        .slick-arrow {
            display: block;
            height: 50px;
            width: 38px;
            border: 1px solid lightgrey;
            background-color: white;
            z-index: 99;
        }
        .noUi-target {
            background: none;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            border: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .slick-list.draggable {
            bottom: 23px;
        }
        .slick-arrow:hover {
            background-color: white;
        }
        .borders {
            background: transparent;
            width: 95%;
            height: 50px;
            position: absolute;
            left: 26px;
            top: 56.3%;
            border: 1px solid lightgrey;
            border-radius: 4px;
        }
        button.slick-next.slick-arrow {
            border-right: none;
            border-radius: 0 4px 4px 0;
        }
        button.slick-prev.slick-arrow {
            border-radius: 4px 0 0 4px;
        }
        .slick-slide {
            margin: 0px 10px;
            width: 85px !important;
            padding: 0 8px;
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div>


        </div>


    </div>
    <form method="post" action="https://paysprint.in/service-api/api/v1/service/bus/generateurl">
        <textarea name="encdata" style="display:none">9boguC7vAwsuPLbu4IGNrmIvqCvea4ePdAezXFBLsrvSaOXyqM0MrT2ijwaFFGI04eYx6GwXwIUNkP/i+CnpAAlFSvR/s46CmBs+SjbMBhRHqkQZjmA0hwDSO9l1G5LQ\</textarea>
        <input type="submit" value="Submit">
      </form>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).on('ready', function() {
            $(".center").slick({
                dots: false,
                infinite: true,
                centerMode: true,
                slidesToShow: 7,
                slidesToScroll: 3,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }
                ]
            });
        });
        $('#btn_select_seat').click(function() {
            $(this).hide();
            $('#seats-data').show();
            $('#btn_hide_seat').show();
        });
        $('#btn_hide_seat').click(function() {
            $(this).hide();
            $('#seats-data').hide();
            $('#btn_select_seat').show();
        });
    </script>
@endsection
