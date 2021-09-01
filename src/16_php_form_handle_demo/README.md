# `PHP` 表单处理
> `PHP` 超全局变量 `$_GET` 和 `$_POST` 用于收集表单数据（`form-data`）

## `GET` `vs.` `POST`
`GET` 和 `POST` 都创建数组（例如，`array( key => value, key2 => value2, key3 => value3, ...)`）。此数组包含键/值对，其中的键是表单控件的名称，而值是来自用户的输入数据。

`GET` 和 `POST` 被视作 `$_GET` 和 `$_POST`。它们是超全局变量，这意味着对它们的访问无需考虑作用域 - 无需任何特殊代码，您能够从任何函数、类或文件访问它们。

- `$_GET` 是通过 `URL` 参数传递到当前脚本的变量数组。
- `$_POST` 是通过 `HTTP` `POST` 传递到当前脚本的变量数组。

### 何时使用 `GET`？
通过 `GET` 方法从表单发送的信息对任何人都是可见的（所有变量名和值都显示在 `URL` 中）。`GET` 对所发送信息的数量也有限制。限制在大约 `2000` 个字符。不过，由于变量显示在 `URL` 中，把页面添加到书签中也更为方便。
`GET` 可用于发送非敏感的数据。

**注释**：绝不能使用 `GET` 来发送密码或其他敏感信息！

### 何时使用 `POST`？
通过 `POST` 方法从表单发送的信息对其他人是不可见的（所有名称/值会被嵌入 `HTTP` 请求的主体中），并且对所发送信息的数量也无限制。

此外 `POST` 支持高阶功能，比如在向服务器上传文件时进行 `multi-part` 二进制输入。
不过，由于变量未显示在 `URL` 中，也就无法将页面添加到书签。

**提示**：开发者偏爱 `POST` 来发送表单数据。