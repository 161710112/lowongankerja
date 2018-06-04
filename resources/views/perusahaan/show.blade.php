@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Perusahaan 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Logo</label>	
			  			<input type="text" name="logo" class="form-control" value="{{ $p->logo }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $p->deskripsi }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Kategori</label>	
			  			<input type="text" name="kategori" class="form-control" value="{{ $p->kategori }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">SubKategori</label>
						<input type="text" name="subkategori" class="form-control" value="{{ $p->subkategori }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Judul</label>
						<input type="date" name="judul" class="form-control" value="{{ $p->judul }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Gaji</label>
						<input type="date" name="gaji" class="form-control" value="{{ $p->gaji }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Tgl mulai</label>
						<input type="date" name="Tgl_mulai" class="form-control" value="{{ $p->Tgl_mulai }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Email</label>
						<input type="text" name="Email" class="form-control" value="{{ $p-> }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Telepon</label>
						<input type="text" name="user_id" class="form-control" value="{{ $p->user_id->email }}"  readonly>
			  		</div>

			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection