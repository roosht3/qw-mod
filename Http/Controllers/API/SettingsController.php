<?php
/**
 *
 * SettingsController.php
 *
 * @project     qore.works-core
 * @copyright   DQ
 * @author      Rooshan Akthar <rooshan@dolphiq.nl>
 */

namespace Modules\Settings\Http\Controllers\API;


use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Response;
use Modules\Settings\Entities\Settings;
use Modules\Settings\Http\Requests\SettingsRequest;

class SettingsController extends ApiController
{

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($key)
    {
        return Settings::key('key', $key)->first();
    }

    /**
     * Update the specified resource in storage.
     * @param SettingsRequest $request
     * @param string $key
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SettingsRequest $request, $key)
    {
        Settings::key($key)->update(['value' => $request->value]);
        return $this->response->withNoContent();
    }
}
