# delete-multipal-files-in-php
Delete multipal matched file from server using PHP script


```/* add all extenstion want to delete */
$delete_file = ['txt','tar','jpg'];
foreach ($delete_file as $ext) {
    $files = glob('./*.' . $ext);
    foreach ($files as $file) {
        if (is_file($file)) {
            echo $file . "<br>";
            var_dump(unlink($file));
        }
    }
}
```
