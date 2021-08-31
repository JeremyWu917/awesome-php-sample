# `PHP` `for` 循环
> `PHP` `for` 循环执行代码块指定的次数。

如果您已经提前确定脚本运行的次数，可以使用 `for` 循环。

**语法**
```
// 伪语句
for (init counter; test counter; increment counter) {
  code to be executed;
}
```
**参数说明**：
- `init counter`：初始化循环计数器的值
- `test counter`: 评估每个循环迭代。如果值为 `TRUE`，继续循环。如果它的值为 `FALSE`，循环结束。
- `increment counter`：增加循环计数器的值

## `PHP` `foreach` 循环
> `foreach` 循环只适用于数组，并用于遍历数组中的每个键/值对。

```
<!-- 伪代码 -->
foreach ($array as $value) {
  code to be executed;
}
```