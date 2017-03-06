<style>
    #commen_slide_tab { z-index:2;}
    .treeview span.indent {
        margin-left: 20px;
        margin-right: 20px;
    }
    .treeview span, .treeview li {
        cursor:pointer; 
    }


</style>

    <aside class="main-sidebar" style="">
        <section class="sidebar" id="left_sidebar">
            <ul class='list-group'>
            @foreach ($users as $user)
                <li class='list-group-item node-tree'>
                    <span class='indent'></span>
                    <span class='icon expand-icon glyphicon'></span>
                    <span class='icon node-icon'></span>
                    <a href='/advert/startup'>{{ $user->name }}</a>
                </li>
                    @endforeach
            </ul>    
        </section>
    </aside>
       <script>
            $(function() {
                $('.node-tree>a').each(function() {
                    var th = $(this);
                    if(window.location.pathname == th.attr('href')) {
                        th.parent().css('backgroundColor', '#428bca');
                        th.css('color', 'white');
                    } 
                });
            });
        </script>
