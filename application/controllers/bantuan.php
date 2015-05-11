<?php 
	if (! defined('BASEPATH')) exit('No direct script access allowed');
		class bantuan extends CI_Controller 
		{
			function __construct()
			{
				parent::__construct();
				$this->load->library(array('table'));
				$this->load->helper(array('url','form'));
				$this->load->model('bantuan_model','',TRUE);
			}
			
			function index()
			{
				$this->load->view('head');
				$this->load->view('menu_bantuan');
				$this->load->view('foot');
			}
			
			function cetak_semua()
			{
				$bantuans=$this->bantuan_model->get_paged_list()->result();
				$tmpl = array ('table_open' => '<table border="1" class="table table-striped">');
				$this->table->set_template($tmpl);
				$this->table->set_empty("&nbsp;");
				$this->table->set_heading('No KK', 'Nama Kepala Keluarga', 'Pekerjaan', 'Status Perkawinan', 'Status Dalam Keluarga', 'Provinsi', 'Bantuan Yang Diterima', 'Option');
				$i=0;
					foreach ($bantuans as $bantuan)
					{
						$this->table->add_row
						(
							++$i,
							$bantuan->nama,
							$bantuan->jenis_pekerjaan,
							$bantuan->status_perkawinan,
							$bantuan->status_hub_keluarga,
							$bantuan->provinsi,
							$bantuan->BIS,
							'<div class="btn-group">
  <button type="button" class="btn btn-primary btn-sm dropdown-toggle " data-toggle="dropdown" aria-expanded="false">
    Opsi <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a '.anchor('/bantuan/cetak_detail/'.$bantuan->id,'Detail').'</a></li>
    <li><a '.anchor('/bantuan/edit/'.$bantuan->id,'edit').'</a></li>
    <li class="divider"></li>
    <li><a '.anchor('/bantuan/delete/'.$bantuan->id,'delete').'</a></li>
  </ul>
</div>'
						);
					};
					$data['table']=$this->table->generate();
					$this->load->view('head');
					$this->load->view('bantuan_list',$data);
					$this->load->view('foot');
			}
 
			function input()
			{
				$data['nama']=$this->input->post('nama',true);
				$data['jenis_kelamin']=$this->input->post('jenis_kelamin',true);
				$data['tempat_lahir']=$this->input->post('tempat_lahir',true);
				$data['tanggal_lahir']=$this->input->post('tanggal_lahir',true);
				$data['agama']=$this->input->post('agama',true);
				$data['pendidikan_terakhir']=$this->input->post('pendidikan_terakhir',true);
				$data['jenis_pekerjaan']=$this->input->post('jenis_pekerjaan',true);
				$data['status_perkawinan']=$this->input->post('status_perkawinan',true);
				$data['status_hub_keluarga']=$this->input->post('status_hub_keluarga',true);
				$data['kewarganegaraan']=$this->input->post('kewarganegaraan',true);
				$data['alamat']=$this->input->post('alamat',true);
				$data['kode_pos']=$this->input->post('kode_pos',true);
				$data['provinsi']=$this->input->post('provinsi',true);
				$data['BIS']=$this->input->post('BIS',true);
				$data['tombol']=$this->input->post('tombol',true);
				#$this->load->view('input_bantuan',$data);
				if (!$data['BIS']){$ban='-';}
				else {$ban=implode(',',$data['BIS']);}
				if(!$data['tombol']){}
				else
				{
					$bantuan= array
					(
						'nama'=>$data['nama'],
						'jenis_kelamin'=>$data['jenis_kelamin'],
						'tempat_lahir'=>$data['tempat_lahir'],
						'tanggal_lahir'=>$data['tanggal_lahir'],
						'agama'=>$data['agama'],
						'pendidikan_terakhir'=>$data['pendidikan_terakhir'],
						'jenis_pekerjaan'=>$data['jenis_pekerjaan'],
						'status_perkawinan'=>$data['status_perkawinan'],
						'status_hub_keluarga'=>$data['status_hub_keluarga'],
						'kewarganegaraan'=>$data['kewarganegaraan'],
						'alamat'=>$data['alamat'],
						'kode_pos'=>$data['kode_pos'],
						'provinsi'=>$data['provinsi'],
						
						'BIS'=>$ban
					);
					$this->bantuan_model->save($bantuan);
					redirect('bantuan/cetak_semua');
				}
				$this->load->view('head');
				$this->load->view('input_bantuan',$data);
				$this->load->view('foot');
				
			}
			function cetak_detail($id)
				{
					$data['data']=$this->bantuan_model->get_by_id($id)->row();
					$this->load->view('head');
					$this->load->view('bantuan_detail',$data);
					$this->load->view('foot');
				}
			function edit($id)
				{
				#data['id']=$id
				$data['nama']=$this->input->post('nama',true);
				$data['jenis_kelamin']=$this->input->post('jenis_kelamin',true);
				$data['tempat_lahir']=$this->input->post('tempat_lahir',true);
				$data['tanggal_lahir']=$this->input->post('tanggal_lahir',true);
				$data['agama']=$this->input->post('agama',true);
				$data['pendidikan_terakhir']=$this->input->post('pendidikan_terakhir',true);
				$data['jenis_pekerjaan']=$this->input->post('jenis_pekerjaan',true);
				$data['status_perkawinan']=$this->input->post('status_perkawinan',true);
				$data['status_hub_keluarga']=$this->input->post('status_hub_keluarga',true);
				$data['kewarganegaraan']=$this->input->post('kewarganegaraan',true);
				$data['alamat']=$this->input->post('alamat',true);
				$data['kode_pos']=$this->input->post('kode_pos',true);
				$data['provinsi']=$this->input->post('provinsi',true);
				$data['BIS']=$this->input->post('BIS',true);
				$data['tombol']=$this->input->post('tombol',true);
				#$this->load->view('input_bantuan',$data);
			 
				if(!$data['tombol']){$data['data']=$this->bantuan_model->get_by_id($id)->row();
					$this->load->view('head');
					$this->load->view('edit',$data);
					$this->load->view('foot');
				}
				else
				{
					$up= array
					(
						'nama'=>$data['nama'],
						'jenis_kelamin'=>$data['jenis_kelamin'],
						'tempat_lahir'=>$data['tempat_lahir'],
						'tanggal_lahir'=>$data['tanggal_lahir'],
						'agama'=>$data['agama'],
						'pendidikan_terakhir'=>$data['pendidikan_terakhir'],
						'jenis_pekerjaan'=>$data['jenis_pekerjaan'],
						'status_perkawinan'=>$data['status_perkawinan'],
						'status_hub_keluarga'=>$data['status_hub_keluarga'],
						'kewarganegaraan'=>$data['kewarganegaraan'],
						
						'alamat'=>$data['alamat'],
						
						'kode_pos'=>$data['kode_pos'],
						'provinsi'=>$data['provinsi'],
						'BIS'=>implode(',',$data['BIS'])
					);
					$this->bantuan_model->update($id,$up);
					redirect('bantuan/cetak_semua');
				}
					
					
					
					
				}
			function delete($id)
				{
					$this->bantuan_model->delete($id);
					$this->load->view('head');
					$this->load->view('delete');
					$this->load->view('foot');
				}
			function about()
				{
					$this->load->view('head');
					$this->load->view('about');
					$this->load->view('foot');
				}
		}