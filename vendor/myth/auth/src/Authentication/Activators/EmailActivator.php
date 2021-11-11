<?php namespace Myth\Auth\Authentication\Activators;

use Config\Email;
use Myth\Auth\Entities\User;
use Mpdf\Mpdf;

/**
 * Class EmailActivator
 *
 * Sends an activation email to user.
 *
 * @package Myth\Auth\Authentication\Activators
 */
class EmailActivator extends BaseActivator implements ActivatorInterface
{
    /**
     * Sends an activation email
     *
     * @param User $user
     *
     * @return bool
     */
    public function send(User $user = null): bool
    {
        // helper('PDF');
        $email = service('email');
        $config = new Email();
        // $getReport = generatePDF($user);
        $getReport = $this->generatePDF($user);
        $getFilename = rand(10000, 20000);
        $getFilename .= $user->username;

        $settings = $this->getActivatorSettings();



        $sent = $email->setFrom($settings->fromEmail ?? $config->fromEmail, $settings->fromName ?? $config->fromName)
              ->setTo($user->email)
              ->setSubject(lang('Auth.activationSubject'))
              ->setMessage(view($this->config->views['emailActivation'], ['hash' => $user->activate_hash]))
              ->attach($getReport, 'attachment', $getFilename, 'application/pdf')
              ->setMailType('html')
              ->send();

        if (! $sent)
        {
            $this->error = lang('Auth.errorSendingActivation', [$user->email]);
            return false;
        }

        return true;
    }

    public function generatePDF($user) {
        $html = '
        <html>
        <head>
        <style>
        body {font-family: sans-serif;
            font-size: 10pt;
        }
        .jadwal {
            width: 100%;
        }
        .jadwal, .jadwal th, .jadwal td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        </style>
        </head>
        <body>
        <!--mpdf
        <htmlpageheader name="myheader">
        <table width="100%">
        <tr>
        <td width="50%" style="color:#000000; text-align:center;">
        <span style="font-weight: bold; font-size: 14pt;">BADAN PENGURUS</span>
        <br />
        <span style="font-weight: bold; font-size: 16pt;">SILIWANGI ARCHERY CLUB GARUT</span>
        <br />
        <span style="font-weight: bold; font-size: 10pt; font-style:italic;">(SACG ASSOCIATION)</span>
        <hr/>
        </td>
        </tr>
        </table>
        </htmlpageheader>
        <sethtmlpageheader name="myheader" value="on" show-this-page="1" />
        mpdf-->
        
        <div style="text-align: center; font-size:14pt; font-weight:bold; text-decoration: underline; margin-bottom: 50px;">FORMULIR PENDAFTARAN</div>
        
        <div style="margin-bottom: 40px">
        <table style="width:100%;">
        <tr>
            <th style="width:20%; text-align:left;">Kode Verifikasi</th>
            <td>: '. $user->activate_hash .'</td>
        <tr>
        <tr>
            <th style="text-align:left;">Username</th>
            <td>: '. $user->username .'</td>
        <tr>
        <tr>
            <th style="text-align:left;">Nama Lengkap</th>
            <td>: _____________________________________________________________________________________</td>
        <tr>
        <tr>
            <th style="text-align:left;">Email</th>
            <td>: '. $user->email .'</td>
        <tr>
        <tr>
            <th style="text-align:left;">No Hp</th>
            <td>: _____________________________________________________________________________________</td>
        <tr>
        <tr>
            <th style="text-align:left;">Jenis Kelamin</th>
            <td>: _____________________________________________________________________________________</td>
        <tr>
        <tr>
            <th style="text-align:left;">Alamat</th>
            <td>: _____________________________________________________________________________________</td>
        <tr>
        </table>
        </div>
        
        <div style="margin-bottom:10px">
        <h4>- Lokasi Latihan Panahan</h4>
        <span>Lapangan serta kesekretarian tim SAC terletak di Jl. Raya Samarang, Tarogong, Kec.Tarogong Kaler, Kabupaten Garut, Jawa Barat 44151.</span>
        </div>
        
        <div style="margin-bottom:30px">
        <h4>- Jawdal Latihan Panahan</h4>
        <table class="jadwal">
        <tr>
            <th>No</th>
            <th>Hari</th>
            <th>Waktu/Pukul</th>
            <th>Lokasi</th>
        </tr>
        <tr>
            <th>1</th>
            <th>Kamis</th>
            <th>15.00 WIB</th>
            <th>Lapangan tim SAC</th>
        </tr>
        <tr>
            <th>2</th>
            <th>Jumat</th>
            <th>13.30 WIB</th>
            <th>Lapangan tim SAC</th>
        </tr>
        <tr>
            <th>3</th>
            <th>Sabtu</th>
            <th>12.30 WIB</th>
            <th>Lapangan tim SAC</th>
        </tr>
        <tr>
            <th>4</th>
            <th>Minggu</th>
            <th>12.30 WIB</th>
            <th>Lapangan tim SAC</th>
        </tr>
        </table>
        </div>
        
        <div style="margin-bottom:30px">
        <table style="width: 100%">
            <tr>
                <td><h4>- Registrasi</h4></td>
                <td><h4>- Iuran Harian</h4></td>
                <td><h4>- Iuran Wajib Bulanan</h4></td>
            </tr>
            <tr>
                <td style="padding-top:10px">1). Pelajar : Rp 100.000</td>
                <td>1). 1x Pertemuan : Rp 20.000</td>
                <td>1). Rp 50.000</td>
            </tr>
            <tr>
                <td>2). Umum : Rp 200.000</td>
                <td>2). 1x Pertemuan : Rp 25.000</td>
                <td>2). Rp 75.000</td>
            </tr>
            <tr>
                <td style="padding-top:30px"><h4>- Paket Mingguan 4x Pertemuan</h4></td>
                <td style="padding-top:30px"><h4>- Paket Bulanan 16x Pertemuan</h4></td>
                <td style="padding-top:30px"><h4>- Daftar Ulang</h4></td>
            </tr>
            <tr>
                <td style="padding-top:10px">1). Pelajar : Rp _______________</td>
                <td>1). Pelajar : Rp _______________</td>
                <td>1). Rp 50.000</td>
            </tr>
            <tr style="padding-top:10px;">
                <td># Sewa alat dan kerusakan</td>
                <td># Sewa alat dan kerusakan</td>
                <td># Include KTA</td>
            </tr>
            <tr>
                <td># Iuran Harian</td>
                <td># Iuran Harian</td>
            </tr>
            <tr>
                <td style="padding-top:20px">2). Umum : Rp _______________</td>
                <td>2). Umum : Rp _______________</td>
                <td>2). Rp 75.000</td>
            </tr>
            <tr style="padding-top:10px;">
                <td># Sewa alat dan kerusakan</td>
                <td># Sewa alat dan kerusakan</td>
                <td># Include KTA</td>
            </tr>
            <tr>
                <td># Iuran Harian</td>
                <td># Iuran Harian</td>
            </tr>
        </table>
        </div>
        
        </body>
        </html>
        ';
        
        
        $mpdf = new Mpdf([
            'margin_left' => 20,
            'margin_right' => 15,
            'margin_top' => 48,
            'margin_bottom' => 25,
            'margin_header' => 10,
            'margin_footer' => 10
        ]);
        
        $mpdf->SetProtection(array('print'));
        $mpdf->SetTitle("Siliwangi Archery Club");
        $mpdf->SetAuthor("Siliwangi Archery Club");
        $mpdf->showWatermarkText = true;
        $mpdf->watermark_font = 'DejaVuSansCondensed';
        $mpdf->watermarkTextAlpha = 0.1;
        $mpdf->SetDisplayMode('fullpage');
        
        $mpdf->WriteHTML($html);
        
        $content = $mpdf->Output('', 'S');
    
        return $content;
    }
}
