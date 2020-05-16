@extends('layouts.master')
@section('content')
<div id="modal-create" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Buat Posts</h2>
        <div class="uk-modal-body">
          <form action="" class="uk-form-stacked" method="POST">
            {{ csrf_field() }}
            <div class="uk-margin">
              <label class="uk-form-label">Judul</label>
              <div class="uk-form-controls">
                <input class="uk-input" name="title" type="text" placeholder="Judul" value="">
              </div>
            </div>
            <div class="uk-margin">
              <label class="uk-form-label">Kontent</label>
              <div class="uk-form-controls">
                <textarea class="uk-textarea" rows="5" placeholder="Textarea" name="content"></textarea>
              </div>
            </div>
          </form>
        </div>
        <button class="uk-modal-close" >In sebuah modal</button>
    </div>
</div>
<div class="show-profile container">
  <div class="uk-flex">
     <button class="uk-button uk-button-primary" uk-toggle="target: #modal-create" type="button">Create</button>
  </div>
</div>
<div class="content bg-grey container">
  <div class="list-posts">
    <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
      <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
      </div>
      <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
      </div>
      <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
      </div>
    </div>
  </div>
</div>
@endsection
