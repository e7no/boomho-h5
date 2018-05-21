# ThinkSNS+ HTML 5 (SPA)😊

## 下载

首先，你可以通过多种途径下载 SPA：

Composer:

```shell
composer create-project zhiyicx/plus-component-h5:4.0.0-rc.*
```

Git:

```shell
git clone https://github.com/zhiyicx/plus-component-h5
```

## 安装

通过上述任一方式下载完成后，我们进入 SPA 的目录，你会看到一个 `.env.example` 的文件，你需要复制一份，并命名为 `.env`：

| 健 | 描述 |
|-----|-----|
| BASE_URL | 项目部署的基础路径，我们默认假设你的应用将会部署在域名的根部，比如 `https://www.my-app.com/` 如果你的应用时部署在一个子路径下，那么你需要在这里指定子路径。比如，如果你的应用部署在 `https://www.foobar.com/my-app/` 那么将这个值改为 `/my-app/` |
| GENERATE_CSS_MAP | 编译静态资源的时候是否生成 `sourceMap` |
| VUE_APP_API_HOST | 你的 Plus 程序网址 |
| VUE_APP_API_VERSION | 你要使用的 Plus 程序 API 版本号，目前固定为 `v2` |
| VUE_APP_NAME | 你的程序名字 |
| VUE_APP_KEYWORDS | 你的程序关键词，使用英文半角 `,` 符号分割多 |
| VUE_APP_DESCRIPTION | 你的程序描述 |
| VUE_APP_ROUTER_MODE | 前端路由使用的路由模式，支持 `hash` 和 `history` 两种模式，具体请参考👉 [`vue-route mode`](https://router.vuejs.org/zh-cn/api/options.html#mode) |

> 以上信息配置完成后，你运行 **`yarn`** 或者 **`npm install`** 进行依赖安装！

## 本地运行

好了，你已经安装完成了，首先我们本地预览一下吧，在 SPA 目录执行 `yarn serve` 或者 `npm run serve` 你的浏览器会自动打开预览地址！
你现在可以看到程序的样子了。

