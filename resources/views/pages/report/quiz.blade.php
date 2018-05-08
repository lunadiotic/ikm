@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">
                        INDEKS KEPUASAN MASYARAKAT PER RESPONDEN
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="text-center">PENGOLAHAN INDEKS KEPUASAN MASYARAKAT PER RESPONDEN</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">DAN PER UNSUR PELAYANAN </div>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="text-center">(SEMESTER {{ $semester }} - {{ $tahun }})</div></td>
                            </tr>
                            </tbody>
                        </table>
                    <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td width="194"> UNIT PELAYANAN :</td>
                                    <td width="356">DPMPTSP KOTA CIREBON </td>
                                </tr>
                                <tr>
                                    <td>ALAMAT :</td>
                                    <td>JLN KEBUMEN NO 2 CIREBON</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                <td width="477">
                                    <div class="text-center">NILAI UNSUR PELAYANAN</div>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>No</td>
                                    <td>U1</td>
                                    <td>U2</td>
                                    <td>U3</td>
                                    <td>U4</td>
                                    <td>U5</td>
                                    <td>U6</td>
                                    <td>U7</td>
                                    <td>U8</td>
                                    <td>U9</td>
                                </tr>
                                <?php
                                    $u1 = 0; $u2 = 0; $u3 = 0; $u4 = 0; $u5 = 0; $u6 = 0; $u7 = 0; $u8 = 0; $u9 = 0;
                                    // ${'u'.$que} = 0;
                                ?>
                                <?php $index = 0; foreach ($quiz as $data) : $index++ ?>
                                
                                    <tr>
                                        <td>{{ $index }}</td>
                                        <?php $que = 0; foreach ($data->details as $row): $que++ ?>
                                            @php
                                                switch ($que) {
                                                    case '1':
                                                        $u1 += $row['score'];
                                                        break;
                                                    case '2':
                                                        $u2 += $row['score'];
                                                        break;
                                                    case '3':
                                                        $u3 += $row['score'];
                                                        break;
                                                    case '4':
                                                        $u4 += $row['score'];
                                                        break;
                                                    case '5':
                                                        $u5 += $row['score'];
                                                        break;
                                                    case '6':
                                                        $u6 += $row['score'];
                                                        break;
                                                    case '7':
                                                        $u7 += $row['score'];
                                                        break;
                                                    case '8':
                                                        $u8 += $row['score'];
                                                        break;
                                                    case '9':
                                                        $u9 += $row['score'];
                                                        break;
                                                }
                                            @endphp
                                            <td>{{ $row->score }}</td>
                                        <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td>Nilai Unsur</td>
                                    <td>{{ $u1 }}</td>
                                    <td>{{ $u2 }}</td>
                                    <td>{{ $u3 }}</td>
                                    <td>{{ $u4 }}</td>
                                    <td>{{ $u5 }}</td>
                                    <td>{{ $u6 }}</td>
                                    <td>{{ $u7 }}</td>
                                    <td>{{ $u8 }}</td>
                                    <td>{{ $u9 }}</td>
                                    <td>{{ number_format($utotal = ($u1+$u2+$u3+$u4+$u5+$u6+$u7+$u8+$u9)) }}</td>
                                </tr>
                                <tr>
                                    <td>NRR/Unsur</td>
                                    <td>{{ number_format($ttb1 = ($u1/$index), 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ttb2 = $u2/$index, 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ttb3 = $u3/$index, 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ttb4 = $u4/$index, 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ttb5 = $u5/$index, 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ttb6 = $u6/$index, 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ttb7 = $u7/$index, 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ttb8 = $u8/$index, 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ttb9 = $u9/$index, 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ttbtotal = (($ttb1+$ttb2+$ttb3+$ttb4+$ttb5+$ttb6+$ttb7+$ttb8+$ttb9)/9), 2, ',', ' ') }}</td>
                                </tr>
                                <tr>
                                    <td>NRR Tertimbang/Unsur</td>
                                    <td>{{ number_format($ntu1 = ($ttb1*0.111), 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ntu2 = ($ttb2*0.111), 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ntu3 = ($ttb3*0.111), 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ntu4 = ($ttb4*0.111), 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ntu5 = ($ttb5*0.111), 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ntu6 = ($ttb6*0.111), 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ntu7 = ($ttb7*0.111), 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ntu8 = ($ttb8*0.111), 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ntu9 = ($ttb9*0.111), 3, ',', ' ') }}</td>
                                    <td>{{ number_format($ntut = ($ntu1+$ntu2+$ntu3+$ntu4+$ntu5+$ntu6+$ntu7+$ntu8+$ntu9),2,',', ' ') }}</td>
                                </tr>
                                <tr>
                                    <td>IKM Unit Pelayanan</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ number_format($ikp = ($ntut*25),2,',', ' ') }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td width="194">U1 sudah U9 :</td>
                                    <td width="356">unsur-unsur pelayanan </td>
                                </tr>
                                <tr>
                                    <td>NRR :</td>
                                    <td>nilai rata-rata</td>
                                </tr>
                                <tr>
                                    <td>IKM :</td>
                                    <td>Indeks Kepuasan Masyarakat</td>
                                </tr>
                                <tr>
                                    <td>*) :</td>
                                    <td>Jumlah NRR IK Tertimbang</td>
                                </tr>
                                <tr>
                                    <td>**) :</td>
                                    <td>Jumlah NRR Tertimbang x 26</td>
                                </tr>
                                <tr>
                                    <td>NRR Per Unsur :</td>
                                    <td>Jumlah Nilai Per unsur dibagi jumlah kuesioner yang terisi</td>
                                </tr>
                                <tr>
                                    <td>NRR Tertimbang per unsur</td>
                                    <td>NRR Per unsur x 0,111</td>
                                </tr>
                                <tr>
                                    <td><strong>IKM UNIT Pelayanan</strong></td>
                                    <td><strong>{{ $ikp }}</strong></td>
                                </tr>
                            </tbody>
                        </table>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">
                        UNSUR PELAYANAN
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>No</td>
                                <td>Unsur Pelayanan</td>
                                <td>Nilai Rata-Rata</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Persyaratan</td>
                                <td>{{ number_format($ttb1, 2, ',', ' ') }}</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Prosedur</td>
                                <td>{{ number_format($ttb2, 2, ',', ' ') }}</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Waktu Pelayanan</td>
                                <td>{{ number_format($ttb3, 2, ',', ' ') }}</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Biaya/Tarif</td>
                                <td>{{ number_format($ttb4, 2, ',', ' ') }}</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Produk Spesifikasi Jenis Pelayanan</td>
                                <td>{{ number_format($ttb5, 2, ',', ' ') }}</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Kompetensi Pelayanan</td>
                                <td>{{ number_format($ttb6, 2, ',', ' ') }}</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Perilaku Pelaksana</td>
                                <td>{{ number_format($ttb7, 2, ',', ' ') }}</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Maklumat Pelayanan</td>
                                <td>{{ number_format($ttb8, 2, ',', ' ') }}</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Penanganan pengaduan, saran, masukan</td>
                                <td>{{ number_format($ttb9, 2, ',', ' ') }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">
                        Batas Usia
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>>= 37</td>
                                <td>< 37</td>
                            </tr>
                            <tr>
                                <td>{{ $age1 = $age37max->count() }}</td>
                                <td>{{ $age2 = $age37min->count()  }}</td>
                                <td>{{ $agetotal }}</td>
                            </tr>
                            <tr>
                                <td>{{ number_format($per1 = ($age1/$agetotal)*100) }}%</td>
                                <td>{{ number_format($per2 = ($age2/$agetotal)*100) }}%</td>
                                <td>{{ $per1+$per2 }}%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">
                        Jenis Kelamin
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>Laki-laki</td>
                                <td>Perempuan</td>
                            </tr>
                            <tr>
                                <td>{{ $g1 = $genderl->count() }}</td>
                                <td>{{ $g2 = $genderp->count() }}</td>
                            </tr>
                            <tr>
                                <td>{{ number_format($genderper1 = ($g1/$gendertotal)*100) }}%</td>
                                <td>{{ number_format($genderper2 = ($g2/$gendertotal)*100) }}%</td>
                                <td>{{ $genderper1+$genderper2 }}%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
