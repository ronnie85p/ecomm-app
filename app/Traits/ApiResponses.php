<?php
namespace App\Traits;

use App\Http\Controllers\ApiController;
use Illuminate\Http\JsonResponse;
use Exception;

trait ApiResponses
{
    /**
     * @var int
     */
    public int $responseCode = 200;

    /**
     * @var string
     */
    public string $message = 'OK';

    /**
     * @param int $code
     * @return $this
     */
    public function setCode(int $code = 200): self
    {
        $this->responseCode = $code;
        return $this;
    }

    /**
     * @param string $message
     * @return ApiController|ApiResponses
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param $data
     * @return JsonResponse
     */
    public function respond($data): JsonResponse
    {
        return response()
            ->json(
                [
                    'message' => $this->message,
                    'code' => $this->responseCode,
                    'data' => $data
                ],
                $this->responseCode
            );
    }
}
