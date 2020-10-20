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
<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>