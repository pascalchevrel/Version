<?php

declare(strict_types=1);

use Firefox\Version;

test('Version Construct', function () {
    $obj = new Version("102.1.1");
    expect($obj->version)
        ->toBe("102.1.1");
});
