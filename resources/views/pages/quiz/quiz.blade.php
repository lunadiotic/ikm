@extends('pages.quiz.app')

@section('content')
	<!--   Big container   -->
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<!--      Wizard container        -->
				<div class="wizard-container">
					<div class="card wizard-card" data-color="green" id="wizardProfile">
						<form action="{{ route('quiz') }}" method="POST">
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
									<li><a href="#about" data-toggle="tab">Responden</a></li>
									<li><a href="#quiz" data-toggle="tab">Kuesioner</a></li>
									<li><a href="#comment" data-toggle="tab">Tanggapan</a></li>
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
													<label class="control-label">Nomor Responden <small>(wajib isi)</small></label>
													<input name="no_register" type="text" class="form-control" value="{{ session()->get('number') }}" readonly="">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons"></i>
												</span>
												<div class="form-group label-floating">
													<label class="control-label">Input Umur Anda <small>(wajib isi)</small></label>
													<input name="age" type="number" class="form-control" placeholder="" required>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons"></i>
												</span>
												<div class="form-group label-floating">
													<label class="control-label">Input Tahun Lahir Anda <small>(wajib isi)</small></label>
													<input name="year" type="number" class="form-control" placeholder="" required>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons"></i>
												</span>
												<div class="form-group">
													<label class="control-label" style="font-size: 15px;">Jenis Kelamin <small>(wajib isi)</small></label>
													<div class="radio">
														@foreach ($gender as $data)
															<label class="radio-inline"><input type="radio" name="gender_id" value="{{ $data->id }}" required>{{ $data->title }}</label>
														@endforeach
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons"></i>
												</span>
												<div class="form-group">
													<label class="control-label" style="font-size: 15px;">Pendidikan Terakhir <small>(wajib isi)</small></label>
													<div class="radio">
														@foreach ($education as $data)
															<label class="radio-inline"><input type="radio" name="education_id" value="{{ $data->id }}" required>{{ $data->title }}</label>
														@endforeach
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons"></i>
												</span>
												<div class="form-group">
													<label class="control-label" style="font-size: 15px;">Pekerjaan Utama <small>(wajib isi)</small></label>
													<div class="radio">
														@foreach ($job as $data)
															<label class=""><input type="radio" name="job_id" value="{{ $data->id }}" required>{{ $data->title }}</label>
														@endforeach
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons"></i>
												</span>
												<div class="form-group">
													<label class="control-label" style="font-size: 15px;">Informasi DPMPTSP diperoleh dari <small>(wajib isi)</small></label>
													<div class="radio">
														@foreach ($information as $data)
															<label class=""><input type="radio" name="information_id" value="{{ $data->id }}" required>{{ $data->title }}</label>
														@endforeach
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="quiz">
									<?php $index = 0; $no = 0; foreach($quiz as $data) : $no++; ?>
										<div class="row">
											<div class="col-sm-10 col-sm-offset-1">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons"></i>
													</span>
													<div class="form-group">
														<label class="control-label" style="font-size: 15px;">{{ $no }}. {{ $data->title }} <small>(wajib isi)</small></label>
														<div class="radio">
															@foreach ($data->childs as $data)
																<label class=""><input type="radio" name="responden_form_id[{{$index}}]" value="{{ $data->id }}" required>{{ $data->title }}</label>
															@endforeach
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php $index++; endforeach; ?>
								</div>
								<div class="tab-pane" id="comment">
									<div class="row">
										<div class="col-sm-10 col-sm-offset-1">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons"></i>
												</span>
												<div class="form-group label-floating">
													<label class="control-label">Berikan Komentar Anda <small>(wajib isi)</small></label>
													<textarea name="comment" id="" cols="30" rows="10" class="form-control" required></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wizard-footer">
								<div class="pull-right">
									<input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Lanjut' />
									<input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Selesai' />
								</div>

								<div class="pull-left">
									<input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Kembali' />
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