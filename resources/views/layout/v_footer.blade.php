</div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-center-block">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="">
                        Pemerintah Desa Kenanga
                    </a>
                </li>
        </nav>
        <div class="copyright ml-auto">
        </div>				
    </div>
</footer>
</div>
</div>
</div>


</body>
<script src="{{asset('template-admin')}}/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="{{asset('template-admin')}}/assets/js/core/popper.min.js"></script>
<script src="{{asset('template-admin')}}/assets/js/core/bootstrap.min.js"></script>
<script src="{{asset('template-admin')}}/assets/js/plugin/chartist/chartist.min.js"></script>
<script src="{{asset('template-admin')}}/assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="{{asset('template-admin')}}/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="{{asset('template-admin')}}/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="{{asset('template-admin')}}/assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{asset('template-admin')}}/assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="{{asset('template-admin')}}/assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="{{asset('template-admin')}}/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


{{-- Data Tables --}}
<script>
    $(document).ready( function () {
        $('.data').DataTable(); 
    } );
</script>

{{-- check all --}}
<script>
    $(function(e) {
      $("#checkAll").click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
  
      })
    })
</script>
</html>
