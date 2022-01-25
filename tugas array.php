<?php
 $array = [
   ]
   'nama_siswa' => 'DIANA',
   'jenis_kelamin' => 'perempuan',
   'tanggal_lahir' => '2010-10-30',
   'nilai' => [
       'Matematika' => 60,
       'Pai' => 95,
       'B.Indo' => 78,
   ]
   ],
   [
       'nama_siswa' => 'SUPARDI',
       'jenis_kelamin' => 'Laki-Laki',
       'tanggal_lahir' => '2010-06-14',
       'nilai' => [
           'Matematika' => 90,
           'Pai' => 80,
           'B.Indo' => 68,
       ]
   ]
       ];
   foreach ($array as $item){
       ?>
       <div style="border:solid 1px black;padding:10px;margin:10px auto">
       <table width="100% frame="rules" border="all">
       <tr>
           <td width="50%">
               Nama : <?php echo $item['nama_siswa']; ?><br>
               jenis kelamin : <?php echo $item['jenis_kelamin']; ?><br>
               tgl. lahir : <?php echo date('d F Y',strtotime($item['tanggal_lahir'])) ?>
         </td>
         <td>
             <?php
             foreach ($item['nilai'] as $index => $nilai){
                 echo $index . ':' . $nilai . '<br>';
             }
             ?>
             </td>
            </tr>
            </table>
            </div>
            <?php
   }
   ?>