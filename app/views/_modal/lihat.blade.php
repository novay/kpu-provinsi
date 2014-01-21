<div class="tabbable">
		<br/>
		<ul class="nav nav-tabs" id="myTab">
			<li class="active">
				<a data-toggle="tab" href="#detail">
					Detail {{ $kabupaten->nama }}
				</a>
			</li>
			<li>
				<a data-toggle="tab" href="#map">
					Peta {{ $kabupaten->nama }}
				</a>
			</li>
		</ul>


	<div class="modal-body text-center">
		<div class="tab-content">
			<div id="detail" class="tab-pane in active">
				<h2>Kabupaten/Kota {{strtoupper($kabupaten->nama)}}</h2>
			</div>
			<div id="map" class="tab-pane">
				<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=id&amp;q={{$kabupaten->nama}},+{{Organisasi::data()->provinsi}},+{{Organisasi::data()->negara}}&amp;aq=1&amp;ie=UTF8&amp;hq=&amp;hnear={{$kabupaten->nama}},+{{Organisasi::data()->provinsi}},+{{Organisasi::data()->negara}}&amp;z=7&amp;iwloc=near&output=embed"></iframe>
			</div>
		</div>
	</div>
</div>

<div class="modal-footer">
	<a class="btn btn-small" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Tutup</a>
</div>