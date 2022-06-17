@include('alexandrite::_head')

    <div class="container flex flex-col space-y-3 mx-auto px-12">
        @include('alexandrite::_topbar')
        @include('alexandrite::_hero')

        <div class="bg-white p-6">
            {{ $content }}
        </div>
    </div>


@include('alexandrite::_foot')
