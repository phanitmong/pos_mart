<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>POS</title>
    <style>
        *{
            font-family: 'Bayon';
        }
        .main
        {
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            min-height: 1005px;
            color: rgb(8, 7, 7);
            /* padding: 20px; */
            padding-top: 10px;
            padding-left: 25px;
            padding-right: 25px;
        }
        .m
        {

            width: 100%;
        }
        .foot
        {
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            border-top: 10px solid white;
            padding-top: 10px;
            padding-left: 25px;
            padding-right: 25px;
            height: 250px;
            width: 100%;
            margin: auto;
        }
        .sale
        {
            background: white;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            border-top: 10px solid rgb(17, 132, 150);
            color: black;
        }
    </style>
</head>
<body>
<div class="bg-light m " >
    <div class="main bg-info ">
        <div class="container-fluid">
            <div class="d-flex justify-content-between pt-2">
                <b><i class="fa fa-sign-out-alt"></i> ចាកចេញ</b>
                <h4 class="pl-5">ប្រព័ន្ធគ្រប់គ្រងការលក់</h4>
                <b>
                    <i class="fa fa-user"></i> អ្នកលក់ : Mong Phanit
                </b>
            </div>
        </div>

       <div class="sale" style="height: 600px !important;overflow-y:auto">
        <table class="table table-sm w-100  mt-2 table-bordered" >
            <thead class="text-center text-dark">
                <th>កូដ</th>
                <th>ឈ្មោះទំនិញ</th>
                <th>តម្លៃ</th>
                <th>តម្លៃសរុប</th>
                <th>សកម្មភាព</th>
            </thead>
            <tbody>

            </tbody>
        </table>
       </div>

      <div class="container-fluid ">
        <div class="foot mt-2 bg-info fixed-bottom ">
            <div class="row">
                <div class="col-sm-4 pt-5">
                   <div class="row ">
                       <div class="col-sm-4 text-white"><label for="">បញ្ចូលលកូដទំនីញ :</label></div>
                       <div class="col-sm-8">
                           <input type="text" class="form-control form-control-sm" id="bar_code" placeholder="ស្តែនកូដទំនិញ" autofocus>
                       </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-4 text-white"><label for="">អ្នកលក់ :</label></div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" placeholder="ស្តែនកូដទំនិញ" autofocus>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 text-white"><label for=""></label></div>
                    <div class="col-sm-8">
                       <button class="btn btn btn-danger btn-sm mt-2"><i class="fa fa-times"></i> លុបទាំងអស់</button>
                    </div>
                </div>
                </div>
                <div class="col-sm-4 pt-5">
                    <div class="row ">
                        <div class="col-sm-4 text-white"><label for="">ប្រាក់ដុល្លា + ប្រាក់រៀល:</label></div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" placeholder="ប្រាក់ដុល្លា" >
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" placeholder="ប្រាក់រៀល" >
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-4 text-white"><label for="">ប្រាក់ដុល្លា :</label></div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" placeholder="ប្រាក់ដុល្លា" >
                        </div>
                    </div>

                 </div>
                 <div class="col-sm-4 pt-5">
                    <div class="row ">
                        <div class="col-sm-4 text-white"><label for="">ប្រាក់ដុល្លា + ប្រាក់រៀល:</label></div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" placeholder="ប្រាក់ដុល្លា" >
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" placeholder="ប្រាក់រៀល" >
                        </div>
                    </div>


                 <div class="row">
                     <div class="col-sm-4 text-white"><label for=""></label></div>
                     <div class="col-sm-8">
                        <button class="btn btn btn-danger btn-sm mt-2"><i class="fa fa-times"></i> លុបទាំងអស់</button>
                     </div>
                 </div>
                 </div>
               </div>
           </div>
      </div>
    </div>
</div>


<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<script>

      $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
         });
    $("#bar_code").change(function(e){


       let code = $('#bar_code').val();
        $.ajax({
           type:'POST',
           url:"{{ route('pos.get') }}",
           data:{code:code, },
           success:function(data){

            let td = $('table td:contains('+data.code+')');

            if(td.length>=1)
            {
                let unit = td.parent().children('td:eq(2)').text();
                    let count = parseFloat(unit)+1;
                    td.parent().children('td:eq(2)').text(count);
                $('#bar_code').val('');

            }
            else
            {
                let html = "<tr>"+"<td>"+data.code+"</td><td>"+data.name+"</td><td>"+data.price+"</td>"+"</tr>";
                $('tbody').append(html);
                $('#bar_code').val('');
            }






           }
        });
    });

</script>
</body>
</html>
