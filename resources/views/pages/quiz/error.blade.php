@extends('pages.quiz.app')

@section('content')
	<!--   Big container   -->
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<!--      Wizard container        -->
				<div class="wizard-container">
					<div class="card wizard-card" data-color="green" id="wizardProfile">
					<!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
							<div class="wizard-header">
								<h5 class="wizard-title">
								   Pendapat Masyarakat Tentang
								</h5>
								<h5>Pelayanan Perizinan dan Rekomendasi Pada</h5>
								<h5>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</h5>
							</div>
							<div class="wizard-navigation">
								<ul>
									<li><a href="#about" data-toggle="tab">Gagal!</a></li>
								</ul>
							</div>

							<div class="tab-content">
								<div class="tab-pane" id="about">
									  <div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<div class="col-sm-10 col-sm-offset-1">
												<h2 class="text-center">Maaf permintaan tidak dapat diproses, mohon periksa nomor yang Anda masukan.</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wizard-footer">
								<div class="pull-right">
									<input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
									<a href='{{ url('/') }}'>
										<input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Kembali' />
									</a> 
								</div>

								<div class="pull-left">
									<a href='{{ url('/')  }}' class='btn btn-previous btn-fill btn-default btn-wd'>Kembali</a> 
								</div>
								<div class="clearfix"></div>
							</div>
					</div>
				</div> <!-- wizard container -->
			</div>
		</div><!-- end row -->
	</div> <!--  big container -->
@endsection