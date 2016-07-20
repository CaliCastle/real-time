@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="Post" before="\f073" after="滚犊子">
            {{--<div class="Post__title">我是标题</div>--}}
            {{--<div class="Post__body">我是内容</div>--}}
            <button 触发动画>触发动画</button>
            <ul class="Post__tags">
                <li>
                    标签1
                </li>
                <li>
                    标签2
                </li>
                <li>
                    标签3
                </li>
                <li>
                    标签4
                </li>
            </ul>

            <button 触发模态>触发模态</button>
        </div>
    </div>
</div>
{{-- z-index: 9999 --}}
<div class="Overlay"></div>
{{-- z-index: 10000 --}}
<div class="Modal"></div>
@endsection

@push('scripts')
<script>
    $(function () {
        $("[触发动画]").click(function () {
            $(".Post").addClass('Post__with-animation');

            setTimeout(function () {
                $(".Post").removeClass('Post__with-animat¡ion');
            }, 1000);
        });

        $("[触发模态]").click(function () {
            $(".Overlay").addClass('Overlay--show');
        });

        $(".Overlay").on('click', function (ev) {
            $(ev.target).fadeOut();
            setTimeout(function () {
                $(ev.target).removeClass('Overlay--show');
            }, 350);
        });
    });
</script>
@endpush