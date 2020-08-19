<?php
declare(strict_types=1);

namespace App\HttpController\Constellation;

use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\HttpClient\Exception\InvalidUrl;
use EasySwoole\HttpClient\HttpClient;
use EasySwoole\Validate\Validate;

/**
 * Class Luck
 * @package App\HttpController\Constellation
 * @deprecated 星座控制器
 * @author Yang Zhao
 */
class Luck extends Controller
{

    /**
     * URL AND KEY
     */
    public const URL = 'http://api.tianapi.com/txapi/star/index';
    public const KEY = '70d382ac904643d54adfa89eaec8cb87';

    /**
     * 星座运势
     * @throws InvalidUrl
     * @author Yang Zhao
     */
    public function Todayluck()
    {
        $params = $this->request()->getRequestParam();
        $validator = new Validate();
        $validator->addColumn('constellation')->required('不能为空');
        if (!$validator->validate($params)) {
            echo PHP_EOL . "************传参错误************" . PHP_EOL;
        }
        $constellation = $params['constellation'];
        $url = self::URL . "?key=" . self::KEY . "&" . "astro=$constellation";
        $client = new HttpClient($url);
        $result = $client->get();
        $respoen = json_decode($result->getBody());
        if ($respoen->code === 200) { //判断状态码
            $this->success($respoen); //打印数组
        } else {
            echo "返回错误，状态消息：" . $respoen['msg'];
        }
    }

    /**
     * 返回成功响应(JSON)
     * @param mixed $data
     * @param int $code
     * @param string $message
     */
    protected function success($data = [], int $code = 200, string $message = 'success'): void
    {
        $date = date('Y-m-d H:i:s');
        $this->response()->withHeader('content-type', 'application/json');
        $this->response()->write(json_encode(compact('code', 'message', 'data', 'date'), JSON_UNESCAPED_UNICODE));
        $this->response()->end();
    }

}