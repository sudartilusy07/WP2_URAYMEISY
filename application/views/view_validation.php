 <!DOCTYPE html>
 <html>
 <head>
   <title>
     Form Validation
   </title>
 </head>
 <body>
      <h2 align="center">Form Validation</h2>
      <form action="<?php echo base_url() . 'Matakuliah/cetak'; ?> " enctype="multipart/form-data" method="post" accept-charset="utf-8" aria-hidden="true">
          <table  cellpadding="0px" cellspacing="0px" width="300px" align="center" height="280px">
              <tr>
                 <td width="40%">Kode Matakuliah </td>
                 <td width="60%"><input type="text" name="kode" value="<?= set_value('kode') ?>" style="width:100%"/> 
                    <?= form_error('kode', '<small style="color:red">', '</small>'); ?>
                 </td>
               </tr>
               <tr>
                 <td width="40%">Nama Matakuliah </td>
                 <td width="60%"><input type="text" name="nama" value="<?= set_value('nama') ?>" style="width:100%"/> 
                    <?= form_error('nama', '<small style="color:red">', '</small>'); ?>
                 </td>
               </tr>
               <tr>
                 <td width="40%">SKS </td>
                 <td width="60%"><input type="text" name="sks" style="width:100%"/> 
                 </td>
               </tr>
                <tr>
               <td></td>
                 <td> 
                      <input type="reset" name="reset" value="Reset"/>
                      <input type="submit" name="simpan" value="Simpan"/>
                 </td>
               </tr>
          </table>
      </form>
 </body>
 </html>