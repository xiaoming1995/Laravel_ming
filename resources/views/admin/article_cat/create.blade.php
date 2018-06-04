@extends('admin_default.default')

@section('content')
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加分类</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">  

      <div class="form-group">
        <div class="label">
          <label>分类名称：</label>
      </div>
      <div class="field">
          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
      </div>
      </div>

      <div class="form-group">
          <div class="label">
            <label>父级分类：</label>
      </div>
      <div class="field">
          <select name="cid" class="input w50">
              <option value="">--无父级--</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
          </select>
            <div class="tips"></div>
      </div>

      </div>
    
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 添加</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
