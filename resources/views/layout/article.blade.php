@include('partials.common.head')
@include('partials.navbars.default')

<div class="container mx-auto py-6 md:py-12">
    <main class="px-6 md:px-0 mx-auto prose md:prose-lg lg:prose-xl prose-slate">
        <p>This is normal text.</p>
        <p class="bg-oblong-blue-light text-white">This is blue light text.</p>
        <p class="bg-oblong-blue text-white">This is blue normal text.</p>
        <p class="bg-oblong-blue-dark text-white">This is blue dark text.</p>
        <p>This is normal text.</p>
        <p class="bg-oblong-green-light text-white">This is green light text.</p>
        <p class="bg-oblong-green text-white">This is green normal text.</p>
        <p class="bg-oblong-green-dark text-white">This is green dark text.</p>
        <p>This is normal text.</p>
        <p>This is normal text.</p>
        <p>This is normal text.</p>
        <p>This is normal text.</p>
        <p>This is normal text.</p>
        <p>This is normal text.</p>
        <p>This is <a href="" class="link">link text</a>.</p>
        <p>This is <a href="/bah" class="link">link text with hover effect</a>.</p>
        <p>This is <a href="" class="link">link visited text</a>.</p>
        <button class="btn">Standard button</button>
        <button class="btn-ghost">Button</button>
        
        {!! $body !!}
        {!! $body !!}
        {!! $body !!}
        {!! $body !!}
        {!! $body !!}
        {!! $body !!}
        {!! $body !!}
        <p class="text-slate-100 ">This is gray</p>
    </main>
</div>

@include('partials.common.footer')

