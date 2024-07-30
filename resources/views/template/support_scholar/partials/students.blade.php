@foreach ($students as $item)
<div class="col-lg-3 teacher" data-gender="{{ $item->gender }}">
    <div class="card">
        <div class="card_img">
            <div class="card_plus trans_200 text-center"><a href="{{ url('student_stories_indiviual', ['id' => $item->id]) }}">+</a></div>
            @php
                $imagePath = asset('students_images/' . $item->images);
                echo '<!-- Image path: ' . $imagePath . ' -->';
            @endphp
            <img class="card-img-top trans_200" src="{{ $imagePath }}" alt="Student Image" style="filter: blur(10px); max-height: 250px;">
        </div>

        <div class="card-body text-center mt-4">
            <div class="card-text text-dark mb-2">
                @if($item->gender == 'male')
                    Male from {{ $item->province }}
                @else
                    A Student from {{ $item->province }}
                @endif
            </div>
            <div class="card-text text-dark mb-2">{{ $item->discipline }}</div>
            <div class="card-text text-dark mb-2">{{ $item->gender }}</div>
        </div>
    </div>
</div>
@endforeach
