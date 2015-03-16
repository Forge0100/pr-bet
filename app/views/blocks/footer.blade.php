<div class="container text-center">
  <div class="row text-center">
  	@if (date("Y") < 2015)
		@ 2015 - {{ date("Y"); }}  All Right Reserved! 
  	@else
    	@ {{ date("Y"); }} All Right Reserved! 
    @endif
  </div>
</div>