@extends('layouts.app')

@php
    $u11 = 0; $u21 = 0; $u31 = 0; $u41 = 0; $u51 = 0; $u61 = 0; $u71 = 0; $u81 = 0; $u91 = 0;
    $u12 = 0; $u22 = 0; $u32 = 0; $u42 = 0; $u52 = 0; $u62 = 0; $u72 = 0; $u82 = 0; $u92 = 0;
@endphp

<?php $index1 = 0; foreach ($quiz1 as $data1) : $index1++ ?>
    <?php $que1 = 0; foreach ($data1->details as $row1): $que1++ ?>
        @php
            switch ($que1) {
                case '1':
                    $u11 += $row1['score'];
                    break;
                case '2':
                    $u21 += $row1['score'];
                    break;
                case '3':
                    $u31 += $row1['score'];
                    break;
                case '4':
                    $u41 += $row1['score'];
                    break;
                case '5':
                    $u51 += $row1['score'];
                    break;
                case '6':
                    $u61 += $row1['score'];
                    break;
                case '7':
                    $u71 += $row1['score'];
                    break;
                case '8':
                    $u81 += $row1['score'];
                    break;
                case '9':
                    $u91 += $row1['score'];
                    break;
            }
        @endphp
    <?php endforeach; ?>
<?php endforeach; ?>

<?php $index2 = 0; foreach ($quiz2 as $data2) : $index2++ ?>
    <?php $que2 = 0; foreach ($data2->details as $row2): $que2++ ?>
        @php
            switch ($que2) {
                case '1':
                    $u12 += $row2['score'];
                    break;
                case '2':
                    $u22 += $row2['score'];
                    break;
                case '3':
                    $u32 += $row2['score'];
                    break;
                case '4':
                    $u42 += $row2['score'];
                    break;
                case '5':
                    $u52 += $row2['score'];
                    break;
                case '6':
                    $u62 += $row2['score'];
                    break;
                case '7':
                    $u72 += $row2['score'];
                    break;
                case '8':
                    $u82 += $row2['score'];
                    break;
                case '9':
                    $u92 += $row2['score'];
                    break;
            }
        @endphp
    <?php endforeach; ?>
<?php endforeach; ?>

@php
    $total_unsur1 = number_format(($u11+$u21+$u31+$u41+$u51+$u61+$u71+$u81+$u91));

    $nrru11 = $u11/$index1; $nrru21 = $u21/$index1; $nrru31 = $u31/$index1; $nrru41 = $u41/$index1; $nrru51 = $u51/$index1;
    $nrru61 = $u61/$index1; $nrru71 = $u71/$index1; $nrru81 = $u81/$index1; $nrru91 = $u91/$index1;

    $totalnrru1 = (($nrru11+$nrru21+$nrru31+$nrru41+$nrru51+$nrru61+$nrru71+$nrru81+$nrru91)/9);

    $nrrtu11 = ($nrru11*0.111); $nrrtu21 = ($nrru21*0.111); $nrrtu31 = ($nrru31*0.111); $nrrtu41 = ($nrru41*0.111); $nrrtu51 = ($nrru51*0.111); 
    $nrrtu61 = ($nrru61*0.111); $nrrtu71 = ($nrru71*0.111); $nrrtu81 = ($nrru81*0.111); $nrrtu91 = ($nrru91*0.111);
    
    $totalnrrtu1 = ($nrrtu11+$nrrtu21+$nrrtu31+$nrrtu41+$nrrtu51+$nrrtu61+$nrrtu71+$nrrtu81+$nrrtu91);

    $ikm1 = ($totalnrrtu1*25);
@endphp

@php
    $total_unsur2 = number_format(($u12+$u22+$u32+$u42+$u52+$u62+$u72+$u82+$u92));

    $nrru12 = $u12/$index2; $nrru22 = $u22/$index2; $nrru32 = $u32/$index2; $nrru42 = $u42/$index2; $nrru52 = $u52/$index2;
    $nrru62 = $u62/$index2; $nrru72 = $u72/$index2; $nrru82 = $u82/$index2; $nrru92 = $u92/$index2;

    $totalnrru2 = (($nrru12+$nrru22+$nrru32+$nrru42+$nrru52+$nrru62+$nrru72+$nrru82+$nrru92)/9);

    $nrrtu12 = ($nrru12*0.111); $nrrtu22 = ($nrru22*0.111); $nrrtu32 = ($nrru32*0.111); $nrrtu42 = ($nrru42*0.111); $nrrtu52 = ($nrru52*0.111); 
    $nrrtu62 = ($nrru62*0.111); $nrrtu72 = ($nrru72*0.111); $nrrtu82 = ($nrru82*0.111); $nrrtu92 = ($nrru92*0.111);
    
    $totalnrrtu2 = ($nrrtu12+$nrrtu22+$nrrtu32+$nrrtu42+$nrrtu52+$nrrtu62+$nrrtu72+$nrrtu82+$nrrtu92);

    $ikm2 = ($totalnrrtu2*25);
@endphp

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">
                        NILAI RATA RATA INDEK KEPUASAN MASYARAKAT (IKM) PER TRIWULAN TAHUN {{ $tahun }}
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="" width="632" border="1">
                            <tbody>
                                <tr>
                                    <td colspan="5" align="center">NILAI RATA RATA INDEK KEPUASAN MASYARAKAT (IKM) PER TRIWULAN TAHUN {{ $tahun }}</td>
                                </tr>
                                <tr>
                                    <td colspan="5">&nbsp;  </td>
                                </tr>
                                <tr>
                                    <td width="35" rowspan="2" align="center">No </td>
                                    <td width="291" rowspan="2" align="center">Unsur Pelayanan </td>
                                    <td colspan="3" align="center">Nilai Rata-Rata Persemester Tahun 2018</td>
                                </tr>
                                <tr>
                                    <td width="80" align="center">Semester I </td>
                                    <td width="88" align="center">Semester II </td>
                                    <td width="104" align="center">Nilai Rata-Rata </td>
                                </tr>
                                <tr>
                                    <td>1. </td>
                                    <td>Persyaratan </td>
                                    <td align="right">{{ $u11 }}</td>
                                    <td align="right">{{ $u12 }}</td>
                                    <td align="right">{{ ($u11+$u12)/2 }}</td>
                                </tr>
                                <tr>
                                    <td> 2.</td>
                                    <td>Prosedur </td>
                                    <td align="right">{{ $u21 }}</td>
                                    <td align="right">{{ $u22 }}</td>
                                    <td align="right">{{ ($u21+$u22)/2 }}</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Waktu Pelayanan </td>
                                    <td align="right">{{ $u31 }}</td>
                                    <td align="right">{{ $u32 }}</td>
                                    <td align="right">{{ ($u31+$u32)/2 }}</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Biaya / Tarif </td>
                                    <td align="right">{{ $u41 }}</td>
                                    <td align="right">{{ $u42 }}</td>
                                    <td align="right">{{ ($u41+$u42)/2 }}</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Produk spesifikasi jenis pelayanan </td>
                                    <td align="right">{{ $u51 }}</td>
                                    <td align="right">{{ $u52 }}</td>
                                    <td align="right">{{ ($u51+$u52)/2 }}</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Kompetensi Pelayanan </td>
                                    <td align="right">{{ $u61 }}</td>
                                    <td align="right">{{ $u62 }}</td>
                                    <td align="right">{{ ($u61+$u62)/2 }}</td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Perilaku Pelaksana </td>
                                    <td align="right">{{ $u71 }}</td>
                                    <td align="right">{{ $u72 }}</td>
                                    <td align="right">{{ ($u61+$u62)/2 }}</td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td> Maklumat Pelayanan</td>
                                    <td align="right">{{ $u81 }}</td>
                                    <td align="right">{{ $u82 }}</td>
                                    <td align="right">{{ ($u81+$u82)/2 }}</td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>Penanganan pengaduan, saran, masukan </td>
                                    <td align="right">{{ $u91 }}</td>
                                    <td align="right">{{ $u92 }}</td>
                                    <td align="right">{{ ($u91+$u92)/2 }}</td>
                                </tr>
                                    <tr>
                                    <td>&nbsp;</td>
                                    <td>JUMLAH NILAI UNSUR </td>
                                    <td align="right">{{ $total_unsur1 }}</td>
                                    <td align="right">{{ $total_unsur2 }}</td>
                                    <td align="right">{{ ($total_unsur1+$total_unsur2)/2 }}</td>
                                </tr>
                                    <tr>
                                    <td>&nbsp;</td>
                                    <td>NRR / UNSUR </td>
                                    <td align="right">{{ number_format($totalnrru1, 2, ',', '') }}</td>
                                    <td align="right">{{ number_format($totalnrru2, 2, ',', '') }}</td>
                                    <td align="right">{{ number_format(($totalnrru1+$totalnrru2)/2, 2, ',', '') }}</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>NRR TERTIMBANG/UNSUR </td>
                                    <td align="right">{{ number_format($totalnrrtu1, 2, ',', '') }}</td>
                                    <td align="right">{{ number_format($totalnrrtu2, 2, ',', '') }}</td>
                                    <td align="right">{{ number_format(($totalnrrtu1+$totalnrrtu2)/2, 2, ',', '') }}</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>IKM Unit Pelayanan </td>
                                    <td align="right">{{ number_format($ikm1, 2, ',', '') }}</td>
                                    <td align="right">{{ number_format($ikm2, 2, ',', '') }}</td>
                                    <td align="right">{{ number_format(($ikm1+$ikm2)/2, 2, ',', '') }}</td>
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
                        KARAKTERISTIK RESPONDEN BERDASARKAN KELOMPOK UMUR TAHUN {{ $tahun }}
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="" width="636" border="1">
                            <tbody>
                                <tr>
                                    <td colspan="8" align="center">KARAKTERISTIK RESPONDEN BERDASARKAN KELOMPOK UMUR TAHUN {{ $tahun }}</td>
                                </tr>
                                <tr>
                                    <td colspan="8">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="20" rowspan="2" align="center">No</td>
                                    <td width="93" rowspan="2" align="center">Umur </td>
                                    <td colspan="6" align="center">Persentase Responden &nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">Semester I</td>
                                    <td colspan="2" align="center">Semester II </td>
                                    <td colspan="2" align="center">Nilai Rata-Rata Pertahun </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td width="93" align="center">Jumlah </td>
                                    <td width="93" align="center">Persentase </td>
                                    <td width="93" align="center">Jumlah </td>
                                    <td width="93" align="center">Persentase </td>
                                    <td width="93" align="center">Jumlah </td>
                                    <td width="93" align="center">Persentase </td>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>&gt;= 37 Tahun</td>
                                    <td align="right">{{ $age37max1 }}</td>
                                    <td align="right">{{ $agetotalpercent11 = ($age37max1/$agetotal1)*100 }}%</td>
                                    <td align="right">{{ $age37max2 }}</td>
                                    <td align="right">{{ $agetotalpercent21 = ($age37max2/$agetotal2)*100 }}%</td>
                                    <td align="right">{{ $ageavg1 = ($age37max1+$age37max2)/2 }}</td>
                                    <td align="right">{{ $ageperavg1 = ($agetotalpercent11+$agetotalpercent21)/2 }}</td>
                                </tr>
                                <tr>
                                    <td>2. </td>
                                    <td>&lt; 37 Tahun </td>
                                    <td align="right">{{ $age37min1 }}</td>
                                    <td align="right">{{ $agetotalpercent12 = ($age37min1/$agetotal1)*100 }}%</td>
                                    <td align="right">{{ $age37min2 }}</td>
                                    <td align="right">{{ $agetotalpercent22 = ($age37min2/$agetotal2)*100 }}%</td>
                                    <td align="right">{{ $ageavg2 = ($age37min1+$age37min2)/2 }}</td>
                                    <td align="right">{{ $ageperavg2 = ($agetotalpercent12+$agetotalpercent22)/2 }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Jumlah </td>
                                    <td align="right">{{ $agetotal1 }}</td>
                                    <td align="right">{{ $agetotalpercent11+$agetotalpercent12 }}%</td>
                                    <td align="right">{{ $agetotal2 }}</td>
                                    <td align="right">{{ $agetotalpercent21+$agetotalpercent22 }}%</td>
                                    <td align="right">{{ $ageavg1+$ageavg2 }}</td>
                                    <td align="right">{{ $ageperavg1+$ageperavg2 }}%</td>
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
                        KARAKTERISTIK RESPONDEN BERDASARKAN JENIS KELAMIN TAHUN {{ $tahun }}
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="" width="628" border="1">
                            <tbody>
                                <tr>
                                    <td colspan="8" align="center">KARAKTERISTIK RESPONDEN BERDASARKAN JENIS KELAMIN TAHUN {{ $tahun }}</td>
                                </tr>
                                <tr>
                                    <td colspan="8">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="20" rowspan="2" align="center"> No</td>
                                    <td width="92" rowspan="2" align="center">Jenis Kelamin</td>
                                    <td colspan="6" align="center">Persentase Responden &nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"> Semester I</td>
                                    <td colspan="2" align="center">Semester II </td>
                                    <td colspan="2" align="center">Nilai Rata-Rata Pertahun </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td width="64" align="center">Jumlah </td>
                                    <td width="71" align="center">Persentase </td>
                                    <td width="70" align="center">Jumlah </td>
                                    <td width="76" align="center">Persentase </td>
                                    <td width="59" align="center">Jumlah </td>
                                    <td width="124" align="center">Persentase </td>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>Laki-laki</td>
                                    <td>{{ $gl1 = $genderl1->count() }}</td>
                                    <td>{{ $gper1 = ($gl1/$gendertotal1)*100 }}%</td>
                                    <td>{{ $gl2 = $genderl2->count() }}</td>
                                    <td>{{ $gper2 = ($gl2/$gendertotal1)*100 }}%</td></td>
                                    <td>{{ $gtotal1 = $gl1+$gl2 }}</td>
                                    <td>{{ $gavg1 = ($gper1+$gper2)/2 }}%</td>
                                </tr>
                                <tr>
                                    <td>2. </td>
                                    <td> Perempuan</td>
                                    <td>{{ $gl3 = $genderp1->count() }}</td>
                                    <td>{{ $gper3 = ($gl2/$gendertotal2)*100 }}%</td>
                                    <td>{{ $gl4 = $genderp2->count() }}</td>
                                    <td>{{ $gper4 = ($gl4/$gendertotal2)*100 }}%</td>
                                    <td>{{ $gtotal2 = $gl3+$gl4 }}</td>
                                    <td>{{ $gavg2 = ($gper3+$gper4)/2 }}%</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Jumlah </td>
                                    <td>{{ $gendertotal1 }}</td>
                                    <td>{{ $gper1 + $gper3 }}%</td>
                                    <td>{{ $gendertotal2 }}</td>
                                    <td>{{ $gper2 + $gper4 }}%</td>
                                    <td>{{ $gtotal1+$gtotal2 }}</td>
                                    <td>{{ $gavg1+$gavg2 }}%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
