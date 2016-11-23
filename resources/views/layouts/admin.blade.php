<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href='/uploader3/css/fileinput.min.css' rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    <div class="container-fluid" id="page-wrapper">
        @include('layouts.parts._adminNav')

        <div class="container-fluid no-indent" id="content-wrapper">
            @yield('content')
        </div>        
        
        @include('layouts.parts._adminFooter')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src='/js/jquery-3.1.1.min.js'></script>
    <script src="/css/bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(function(){
            var contentHeight = $(window).height() - $('#page-wrapper .footer').outerHeight(true) - $('#page-wrapper .navigation').outerHeight(true);
            $('#content-wrapper').css('min-height', contentHeight);
            
            $('#categoryId').on('change', function(){
                $('#select_category').submit();
            }) 
        })

    </script>
    <script src='/uploader3/js/fileinput.min.js'></script>


    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
        <script type="text/javascript">
      $(function () {
        $('#jstree').jstree({

        });
        // 7 bind to events triggered on the tree
        $('#jstree').on("changed.jstree", function (e, data) {
            
            switch($(data.event.target).parent('li').attr('data-category')){
                case 'all_categories':
                    $(location).attr('href', "/admin/documents");  
                break;
                case 'category':
                    var splitedId = data.selected[0].split('_');
                    var id = splitedId[splitedId.length - 1];
                    $(location).attr('href', "/admin/documents?categoryId="+id);  
                break;
                case 'document':
                    $(location).attr('href', "/admin/documents/"+data.selected[0]);
                break;
            }
            /*http://192.168.10.208/admin/items/1/edit*/
        });

        var savePosition = localStorage.getItem('categoryTreeHelper');

        if (!savePosition) {
            localStorage.setItem('categoryTreeHelper', "open");
        }else if (savePosition=="open") {
            toggle();
        }

        $('#hide-category-tree-helper').on('click', toggle);

        function toggle(){
            var component = $('#jstree');

            if (component.css('display')=="none") {
                $('#main-content').attr('class', 'col-md-8');
                $('#hide-category-tree-helper').css("opacity", "1");
                localStorage.setItem('categoryTreeHelper', "open");
            }

            component.slideToggle(300, function(){

            if (component.css('display')=="none") {
                $('#main-content').attr('class', 'col-md-12');
                $('#hide-category-tree-helper').css("opacity", "0.5");
                localStorage.setItem('categoryTreeHelper', "closed");
            }

            });

        }
      });
    </script>
</body>
</html>
