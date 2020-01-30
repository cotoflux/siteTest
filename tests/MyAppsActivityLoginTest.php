<?php



use App\MyAppsActivityLogin;
use PHPUnit\Framework\TestCase;
use App\SiteAPIClient;
use GuzzleHttp\Client;
use Symfony\Component\VarDumper;



class MyAppsActivityLoginTest extends TestCase
{

    public function test_expected_username()
    {
        $respuestaClasse = new MyAppsActivityLogin();
        $respuesta = $respuestaClasse->get_userLoginApp();
        $this->assertEquals(USER, $respuesta);
    }

    public function test_expected_password()
    {
        $respuestaClasse = new MyAppsActivityLogin();
        $respuesta = $respuestaClasse->get_passwordLoginApp();
        $this->assertEquals(PASSWORD, $respuesta);
    }

    public function test_fake_token()
    {
        $respuestaClasse = new MyAppsActivityLogin();
        $respuestaTokenFake = $respuestaClasse->get_tokenLoginApp();
        $this->assertNotEmpty($respuestaTokenFake);

    }
}