@extends('admin.layouts.app')

@section('title', 'Thêm bài viết')

@push('css')
<style>
  .tag-wrapper {
    min-height: 45px;
    transition: border-color .2s ease, box-shadow .2s ease;
  }

  /* Hover + focus trong */
  .tag-wrapper:focus,
  .tag-wrapper:has(.tag-input:focus) {
    border-color: #696cff;
    box-shadow: 0 0.125rem 0.25rem 0 rgba(105, 108, 255, 0.4);
    border-width: 2px;
  }

  /* Input */
  .tag-input {
    min-width: 120px;
    outline: none;
    box-shadow: none;
  }

  /* Placeholder animation */
  .tag-input::placeholder {
    transition: transform .2s ease, opacity .2s ease;
  }

  /* Hover hoặc focus thì placeholder thụt vào */
  .tag-wrapper:focus .tag-input::placeholder,
  .tag-input:focus::placeholder {
    transform: translateX(6px);
    opacity: 0.85;
  }

  /* Tag badge */
  .tag-item {
    font-size: 13px;
    padding: 6px 8px;
    border-radius: 6px;
  }
</style>
@endpush

@section('content')
<div class="row mb-6 gy-6">
  <div class="col-xl">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Thêm bài viết</h5>
      </div>

      <div class="card-body">
        <form action="{{ route('admin.post.store') }}" method="POST">
          @csrf

          <div class="mb-6">
            <label class="form-label">Tiêu đề bài viết</label>
            <input
              type="text"
              name="title"
              class="form-control"
              value="{{ old('title') }}"
              placeholder="Nhập tiêu đề bài viết">
          </div>
          <div class="mb-6">
            <label class="form-label">Tiêu đề phụ (optional)</label>
            <textarea name="description" class="form-control" rows="5">{{ old('description') ?? '' }}</textarea>
          </div>
          <div class="mb-6">
            <label class="form-label">Danh mục</label>
            <select name="category_id" class="form-select">
              <option value="">--Chọn danh mục--</option>
              @foreach ($category as  $c)
              <option value="{{ $c->id }}">{{ $c->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-6">
            <label class="form-label">Nội dung</label>
            <textarea name="content" id="editor" class="form-control">
            {{ old('content') }}
            </textarea>
          </div>
          <div class="mb-6">
            <label class="form-label">Trạng thái</label>
            <select name="status" id="" class="form-select">
              <option value="draft">Bản nháp</option>
              <option value="published">Xuất bản</option>
              <option value="archived">Lưu trữ</option>
            </select>
          </div>
          <div class="mb-6">
            <label class="form-label">Tags (optional)</label>

            <div id="tagWrapper" class="form-control tag-wrapper d-flex flex-wrap gap-2">
              <input
                type="text"
                id="tagInput"
                class="tag-input border-0 flex-grow-1"
                placeholder="Nhập tag và nhấn tab">
            </div>

            <input type="hidden" name="tags" id="tagsHidden">
          </div>


          <button type="submit" class="btn btn-primary">
            Thêm mới
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@push('js')
<script>
  const tagInput = document.getElementById('tagInput');
  const tagWrapper = document.getElementById('tagWrapper');
  const tagsHidden = document.getElementById('tagsHidden');

  let tags = [];

  function renderTags() {
    tagWrapper.querySelectorAll('.tag-item').forEach(e => e.remove());

    tags.forEach((tag, index) => {
      const el = document.createElement('span');
      el.className = 'badge bg-primary tag-item d-flex align-items-center gap-1';
      el.innerHTML = `
                ${tag}
                <button type="button" class="btn-close btn-close-white btn-sm" data-index="${index}"></button>
            `;
      tagWrapper.insertBefore(el, tagInput);
    });

    tagsHidden.value = JSON.stringify(tags);
  }

  tagInput.addEventListener('keydown', function(e) {
    if (e.key === 'Tab') {
      e.preventDefault();

      const value = tagInput.value.trim().toLowerCase();
      if (!value || tags.includes(value)) return;

      tags.push(value);
      tagInput.value = '';
      renderTags();
    }
  });

  tagWrapper.addEventListener('click', function(e) {
    if (e.target.classList.contains('btn-close')) {
      const index = e.target.dataset.index;
      tags.splice(index, 1);
      renderTags();
    }
  });
</script>
@endpush