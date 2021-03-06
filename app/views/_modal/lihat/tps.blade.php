<div class="tabbable">
		<br/>
		<ul class="nav nav-tabs" id="myTab">
			<li class="active">
				<a data-toggle="tab" href="#detail">
					Detail {{ $temp->nama }}
				</a>
			</li>
			<li>
				<a data-toggle="tab" href="#map">
					Peta {{ $temp->nama }}
				</a>
			</li>
		</ul>


	<div class="modal-body text-center">
		<div class="tab-content">
			<div id="detail" class="tab-pane in active">
				<h2>TPS <strong>{{strtoupper($temp->nama)}}</strong></h2>

				<div class="profile-user-info profile-user-info-striped">
					<div class="profile-info-row">
						<div class="profile-info-name"> Nama TPS </div>
						<div class="profile-info-value">
							<i class="icon-map-marker red bigger-110"></i>
							<span>{{ $temp->nama }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Kelurahan </div>
						<div class="profile-info-value">
							<span>{{ Kelurahan::find($temp->id_kelurahan)->nama }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Kecamatan </div>
						<div class="profile-info-value">
							<span>{{ Kecamatan::find($temp->id_kecamatan)->nama }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Kabupaten </div>
						<div class="profile-info-value">
							<span>{{ Kabupaten::find($temp->id_kabupaten)->nama }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> % Kekuatan </div>
						<div class="profile-info-value">
							<!-- Logika Persentasenya Ntar -->
							<span>XXX</span>
						</div>
					</div>

				</div>
			</div>
			<div id="map" class="tab-pane">
				<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=id&amp;q={{$temp->nama}},+{{Kelurahan::find($temp->id_kelurahan)->nama}},+{{Kecamatan::find($temp->id_kecamatan)->nama}},+{{Kabupaten::find($temp->id_kabupaten)->nama}},+{{Organisasi::data()->provinsi}},+{{Organisasi::data()->negara}}&amp;aq=1&amp;ie=UTF8&amp;hq=&amp;hnear={{$temp->nama}},+{{Kelurahan::find($temp->id_kelurahan)->nama}},+{{Kecamatan::find($temp->id_kecamatan)->nama}},+{{Kabupaten::find($temp->id_kabupaten)->nama}},+{{Organisasi::data()->provinsi}},+{{Organisasi::data()->negara}}&amp;z=5&amp;iwloc=near&output=embed"></iframe>
			</div>
		</div>
	</div>
</div>

<div class="modal-footer">
	<a class="btn btn-small" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Tutup</a>
</div>