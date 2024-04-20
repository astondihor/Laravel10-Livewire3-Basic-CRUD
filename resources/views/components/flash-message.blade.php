<div>
    @if ($message = Session::get('success'))
	  <div class="alert alert-success alert-block" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)">
		  <strong>{{ $message }}</strong>
		<button type="button" class="close" data-dismiss="alert" x-on:click="show=false"><x-heroicon-s-x-mark class="w-6 h-6 text-current fill-current" /></button>
	  </div>
	@endif

	@if ($message = Session::get('error'))
	  <div class="alert alert-danger alert-block" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)">
          <strong>{{ $message }}</strong>
	    <button type="button" class="close" data-dismiss="alert" x-on:click="show=false"><x-heroicon-s-x-mark class="w-6 h-6 text-current fill-current" /></button>
	  </div>
	@endif

	@if ($message = Session::get('warning'))
	  <div class="alert alert-warning alert-block" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)">
          <strong>{{ $message }}</strong>
		<button type="button" class="close" data-dismiss="alert" x-on:click="show=false"><x-heroicon-s-x-mark class="w-6 h-6 text-current fill-current" /></button>
	</div>
	@endif

	@if ($message = Session::get('info'))
	  <div class="alert alert-info alert-block" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)">
          <strong>{{ $message }}</strong>
	    <button type="button" class="close" data-dismiss="alert" x-on:click="show=false"><x-heroicon-s-x-mark class="w-6 h-6 text-current fill-current" /></button>
	  </div>
	@endif

	@if ($errors->any())
	  <div class="alert alert-danger" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)">
        <span>Please check the form below for errors</span>
		<button type="button" class="close" data-dismiss="alert" x-on:click="show=false"><x-heroicon-s-x-mark class="w-6 h-6 text-current fill-current" /></button>
	</div>
	@endif
</div>
