<?php

class Controller_Account extends \Controller_Auth
{
    public function before()
    {
        parent::before();
        return;
    }
    public function get_profile()
    {
        $this->template->title = __('account.profile.title');
        $this->template->content = \View::forge('account/profile');

        $objUserKeys = \Model_User_Keys::query()->where('user_id', '=', $this->current_user->id)->order_by('ctime', 'DESC')->get();
        $this->template->content->keys = $objUserKeys;
    }
    public function post_profile()
    {
        $getProfileFields = \Input::post('profile_fields');
        $getIsPublic = (int) \Input::post('public');

        $objUser = \Model_User::query()->where('id', '=', $this->current_user->id)->get_one();
        $objUser->profile_fields = json_encode($getProfileFields);
        $objUser->save();
        \Messages::success(__('account.profile.general.messages.updated'));
        \Response::redirect(\Uri::create('account/profile'));
    }
    public function get_notifications()
    {
        $this->template->title = __('account.profile.title');
        $this->template->content = \View::forge('account/notifications');
    }
    public function get_destroy()
    {
        \Model_User_Keys::query()->where('user_id', '=', $this->current_user->id)->delete();
        \Model_User::query()->where('id', '=', $this->current_user->id)->delete();
        \Session::destroy();
        \Response::redirect(\Uri::create('auth/signup'));
    }
}