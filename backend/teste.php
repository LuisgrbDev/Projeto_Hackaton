<?php

require_once "ReservaDAO.php";
require_once "Reserva.php"; // Assuming Reserva entity is in a separate file

class ReservaDAOTest extends PHPUnit\Framework\TestCase
{
    private $reservaDAO;

    public function setUp(): void
    {
        // Mock the database connection here (optional)
        // You can use a mocking framework like phpunit/mock to simulate database interactions
        // $this->reservaDAO = new ReservaDAO( // inject mocked database connection );
        $this->reservaDAO = new ReservaDAO();
    }

    public function test_getById_success()
    {
        $expectedId = 1;
        $expectedSalaId = 2;
        $expectedTurmaId = 3;
        $expectedDataInicio = "2024-05-21";
        $expectedDataFim = null; // Assuming dataFim is nullable

        // Mock the return value of getById (optional)
        // You can use a mocking framework to simulate database queries
        // $this->reservaDAO->getById = function($id) use ($expectedId, $expectedSalaId, ...) {
        //     // ... return mocked reserva data
        // };

        $reserva = $this->reservaDAO->getById($expectedId);

        $this->assertNotNull($reserva);
        $this->assertEquals($expectedId, $reserva->getId());
        $this->assertEquals($expectedSalaId, $reserva->idSala());
        $this->assertEquals($expectedTurmaId, $reserva->idTurma());
        $this->assertEquals($expectedDataInicio, $reserva->dataInicio());
        $this->assertNull($expectedDataFim, $reserva->dataFim()); // Assert null if applicable
    }

    public function test_getById_failure()
    {
        $invalidId = 999;
        $reserva = $this->reservaDAO->getById($invalidId);

        $this->assertNull($reserva);
    }

    public function test_getAll_success()
    {
        $reservas = $this->reservaDAO->getAll();

        $this->assertIsArray($reservas);
        // You can add more assertions here to check the content of each reserva object
        // based on your expected data
    }

    public function test_create_success()
    {
        $reserva = new Reserva();
        $reserva->setIdSala(5);
        $reserva->setIdTurma(7);
        $reserva->setDataInicio("2024-05-23");
        $reserva->setDataFim("2024-05-24");
        $reserva->setHoraInicio("13:00:00");
        $reserva->setHoraFim("15:00:00");

        $result = $this->reservaDAO->create($reserva);

        $this->assertEquals("reserva cadastrada", $result);
    }

    // Add similar test cases for update and delete methods

    // ... Add test cases for error scenarios (exception handling)
}
