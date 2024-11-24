@php
    $mediaFileType = config('settings.media_file_type');
    $yearMonths = getMonthsForUploadedFiles();
    $mediaPlaceholders = [
        'pdf' => project_asset('/backend/assets/img/pdf-placeholder.png'),
        'zip' => project_asset('/backend/assets/img/zip-placeholder.png'),
        'video' => project_asset('/backend/assets/img/mp4-placeholder.png'),
    ];
@endphp

<!-- Media Library -->
<ul class="attachments list-unstyled" id="attachment-list">
    @php
        $mediaIdsJson = json_encode($media_ids);
    @endphp

    @foreach ($all_media as $media)
        @php
            $isDefaultPlaceholder = isset($mediaPlaceholders[$media->file_type]);
            $imageSrc = $isDefaultPlaceholder 
                ? $mediaPlaceholders[$media->file_type] 
                : getFilePath($media->id, false);
        @endphp

        <li onclick="nextMediaSlide(event, '{{ $mediaIdsJson }}', '{{ $media->id }}')" 
            id="list_item_{{ $media->id }}">
            <div class="attachment-preview">
                <div class="thumbnail">
                    <img class="lozad" src="{{ $imageSrc }}" alt="{{ $media->alt }}" />
                </div>
            </div>
            <button type="button" class="check" id="check_{{ $media->id }}">
                <i class="icofont-check icon-check"></i>
                <i class="icofont-minus icon-minus"></i>
            </button>
        </li>
    @endforeach
</ul>
<!-- /Media Library -->
