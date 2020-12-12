<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('admin/js/jquery.js') }}"></script>
<script src="{{ asset('admin/js/jquery-1.8.3.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/js/jquery.sparkline.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
<script src="{{ asset('admin/js/owl.carousel.js') }}" ></script>
<script src="{{ asset('admin/js/jquery.customSelect.min.js') }}" ></script>

<!--common script for all pages-->
<script src="{{ asset('admin/js/common-scripts.js') }}"></script>

<!--script for this page-->
<script src="{{ asset('admin/js/sparkline-chart.js') }}"></script>
<script src="{{ asset('admin/js/easy-pie-chart.js') }}"></script>
<script src="{{ asset('lib/WYSIWYG/editor.js') }}"></script>

<script>

    //owl carousel

    $(document).ready(function() {
        $("#body_editor").Editor();
        $('.Editor-editor').append($('#body_editor').val())
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true

        });

        $('.team-btn').on('click',function(){
            let team_id = $(this).data("id");
            let team_name = $('#txt-team-'+team_id).val();
            let _token   =  $("input[name=_token]").val();
            $.ajax({
                                url: "/administrator/team/update",
                                type:"POST",
                                data:{
                                id:team_id,
                                en_name:team_name,
                                _token: _token
                                },
                                success:function(response){
                                console.log(response);
                                if(response) {
                                    result = response;
                                    console.log(response.hasError==false);
                                    if(response.hasError == false)
                                    {
                                      alert('با موفقیت انجام شد');
                                    }
                                    else
                                    {
                                      
                                      alert(response.errors.en_name);                                      
                                    }                                    
                                }
                                },
                            });
        })
    });
    $(function()
    {
    $('#savepost').click(function () 
    {
    //get text in div and assign to textarea
        var str = $( '.Editor-container .Editor-editor' ).html();
        $('#body_editor').val(str);
        $('#new_post_form').submit();
    });
    });
    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>