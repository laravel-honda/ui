<?php

it('can render properly', function () {
    $this->assertComponentRenders(
        '<form method="POST" action="/action" class="w-full">' . csrf_field() . ' <input type="hidden" name="_method" value="POST"> </form>',
        '<x-ui-form action="/action" />'
    );
});

it('can render properly with a custom method', function () {
    $this->assertComponentRenders(
        '<form method="POST" action="/action" class="w-full">' . csrf_field() . ' <input type="hidden" name="_method" value="PUT"> </form>',
        '<x-ui-form action="/action" method="PUT" />'
    );
});

it('can send multipart form data', function () {
    $this->assertComponentRenders(
        '<form method="POST" action="/action" enctype="multipart/form-data" class="w-full">' . csrf_field() . ' <input type="hidden" name="_method" value="POST"> </form>',
        '<x-ui-form action="/action" has-files />'
    );
});
