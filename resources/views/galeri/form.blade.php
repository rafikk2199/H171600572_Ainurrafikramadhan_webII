@csrf
 <div class="form-group row">
    <label for="nama" class="col-md-2 col-form-label text-md-right">{{ __('Nama') }}</label>

        <div class="col-md-10">
        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

         @error('nama')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
 </div>
     
 <div class="form-group row">
    <label for="kategori_galeri_id" class="col-md-2 col-form-label text-md-right">{{ __('Kategori Galeri Id') }}</label>

        <div class="col-md-10">
        {!! Form::select('kategori_galeri_id',$KategoriGaleri,null,["class"=>"form-control","required"] ) !!}


         @error('kategori_galeri_id')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
 </div>


 <div class="form-group row">
    <label for="keterangan" class="col-md-2 col-form-label text-md-right">{{ __('Keterangan') }}</label>

        <div class="col-md-10">
        
            {!! Form::textarea('keterangan', null,['class'=>'form-control']); !!}

         @error('keterangan')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
 </div>

  <div class="form-group row">
    <label for="path" class="col-md-2 col-form-label text-md-right">{{ __('Path') }}</label>

        <div class="col-md-10">
        <input id="path" type="text" class="form-control @error('path') is-invalid @enderror" name="path" value="{{ old('path') }}" required autocomplete="path" autofocus>

         @error('path')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
 </div>
     
 
     
 <input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required autocomplete="users_id" autofocus>


   <div class="form-group row mb-0">
    <div class="col-md-10 offset-md-2">
            <button type="submit" class="btn btn-primary">
            {{ __('Simpan data ')}}
            </button>
            <a href="{!! route('kategori_galeri.index')!!}" class="btn btn-danger">
            {{ __('Batal ')}}
            </a>
    </div>
    </div>