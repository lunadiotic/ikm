@extends('pages.quiz.app')

@section('content')
	<!--   Big container   -->
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<!--      Wizard container        -->
				<div class="wizard-container">
					<div class="card wizard-card" data-color="green" id="wizardProfile">
						<form action="{{ route('check') }}" method="POST">
							{{ csrf_field() }}
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
									<li><a href="#about" data-toggle="tab">Check Nomor</a></li>
								</ul>
							</div>

							<div class="tab-content">
								<div class="tab-pane" id="about">
									  <div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons"></i>
												</span>
												<div class="form-group label-floating">
													<label class="control-label">Nomor Perizinan  <small>(wajib isi)</small></label>
													<input name="number" type="text" class="form-control" required>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wizard-footer">
								<div class="pull-right">
									<input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
									<input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
								</div>

								<div class="pull-left">
									<input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
								</div>
								<div class="clearfix"></div>
							</div>
						</form>
					</div>
				</div> <!-- wizard container -->
			</div>
		</div><!-- end row -->
	</div> <!--  big container -->
@endsection