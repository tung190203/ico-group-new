@extends('admin.layouts.app')

@section('title', 'Cập nhật bài viết')

@push('css')
<style>
  .tag-wrapper {
    min-height: 45px;
    transition: border-color .2s ease, box-shadow .2s ease;
  }

  .tag-wrapper:has(.tag-input:focus) {
    border-color: #696cff;
    box-shadow: 0 0.125rem 0.25rem rgba(105, 108, 255, 0.4);
    border-width: 2px;
  }

  .tag-input {
    min-width: 120px;
    outline: none;
    box-shadow: none;
  }

  .tag-input::placeholder {
    transition: transform .2s ease, opacity .2s ease;
  }

  .tag-input:focus::placeholder {
    transform: translateX(6px);
    opacity: 0.85;
  }

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
        <h5 class="mb-0">Cập nhật bài viết</h5>
      </div>

      <div class="card-body">
        <form action="{{ route('admin.post.update', $post->id) }}" method="POST">
          @csrf
          @method('PUT')

          {{-- TITLE --}}
          <div class="mb-6">
            <label class="form-label">Tiêu đề bài viết</label>
            <input
              type="text"
              name="title"
              class="form-control"
              value="{{ old('title', $post->title) }}"
              placeholder="Nhập tiêu đề bài viết">
          </div>

          {{-- DESCRIPTION --}}
          <div class="mb-6">
            <label class="form-label">Tiêu đề phụ (optional)</label>
            <textarea name="description" class="form-control" rows="5">{{ old('description', $post->description) }}</textarea>
          </div>

          <div class="mb-6">
            <label class="form-label">Danh mục</label>
            <select name="category_id" class="form-select">
              <option value="">--Chọn danh mục--</option>
              @foreach ($category as  $c)
              <option value="{{ $c->id }}" {{ old('category_id', $post->category_id) == $c->id ? 'selected' : '' }}>
                {{ $c->name }}
              </option>
              @endforeach
            </select>
          </div>

          {{-- CONTENT --}}
          <div class="mb-6">
            <label class="form-label">Nội dung</label>
            <textarea name="content" id="editor" class="form-control">{{ old('content', $post->content) }}</textarea>
          </div>

          {{-- STATUS --}}
          <div class="mb-6">
            <label class="form-label">Trạng thái</label>
            <select name="status" class="form-select">
              <option value="draft" {{ old('status', $post->status) === 'draft' ? 'selected' : '' }}>Bản nháp</option>
              <option value="published" {{ old('status', $post->status) === 'published' ? 'selected' : '' }}>Xuất bản</option>
              <option value="archived" {{ old('status', $post->status) === 'archived' ? 'selected' : '' }}>Lưu trữ</option>
            </select>
          </div>

          {{-- TAGS --}}
          <div class="mb-6">
            <label class="form-label">Tags (optional)</label>

            <div id="tagWrapper" class="form-control tag-wrapper d-flex flex-wrap gap-2" data-tags='@json($post->tags ?? [])'>
              <input
                type="text"
                id="tagInput"
                class="tag-input border-0 flex-grow-1"
                placeholder="Nhập tag và nhấn Tab">
            </div>

            <input type="hidden" name="tags" id="tagsHidden">
          </div>

          <button type="submit" class="btn btn-primary">
            Cập nhật
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
<script>
  const tagInput   = document.getElementById('tagInput');
  const tagWrapper = document.getElementById('tagWrapper');
  const tagsHidden = document.getElementById('tagsHidden');

  // Khởi tạo tags từ database hoặc old input
  let tags = [];
  try {
    const dataTags = tagWrapper.dataset.tags;
    tags = dataTags ? JSON.parse(dataTags) : [];
  } catch (e) {
    console.error('Error parsing tags:', e);
    tags = [];
  }

  function renderTags() {
    tagWrapper.querySelectorAll('.tag-item').forEach(e => e.remove());

    tags.forEach((tag, index) => {
      const el = document.createElement('span');
      el.className = 'badge bg-primary tag-item d-flex align-items-center gap-1';
      el.innerHTML = `
        ${tag}
        <button type="button"
                class="btn-close btn-close-white btn-sm"
                data-index="${index}"></button>
      `;
      tagWrapper.insertBefore(el, tagInput);
    });

    tagsHidden.value = JSON.stringify(tags);
  }

  renderTags();

  tagInput.addEventListener('keydown', function(e) {
    if (e.key === 'Tab' || e.key === 'Enter') {
      e.preventDefault();

      const value = tagInput.value.trim().toLowerCase();
      if (!value || tags.includes(value)) {
        tagInput.value = '';
        return;
      }

      tags.push(value);
      tagInput.value = '';
      renderTags();
    }
  });

  tagWrapper.addEventListener('click', function(e) {
    if (e.target.classList.contains('btn-close')) {
      tags.splice(e.target.dataset.index, 1);
      renderTags();
    }
  });
</script>
@endpush