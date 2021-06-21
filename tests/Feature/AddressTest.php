<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Database\Factories\AddressFactory;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class AddressTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;
    private $address;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->address = factory(Address::class)->create();
    }
    
    public function testIndex()
    {
        // // Création Mock
        // $this->mock(Address::class,function ($mock) 
        // {
        //     $mock->shouldReceive('all')->andReturn('addresses');
        // });

        //Action
        $response = $this->get(route('addresses.index'));

        //Assertions
        $response->assertOk();
        $response->assertViewHas('addresses');
    }

    public function testCreate()
    {
        //Action
        $response = $this->get(route('addresses.create'));

        //Assertions
        $response->assertOk();
        $response->assertViewIs('addresses.create');
    }

    public function testStore()
    {
        
        $data = [
            'address' => 'test addresse 1',
            'address2' => 'test addresse 2',
            'city' => 'Toulon',
            'zip_code' => '83000'
        ];

        //Action
        $response = $this->postJson(route('addresses.store'), $data);

        //Assertions
        $response->assertRedirect(route('addresses.index'));
        $this->assertDatabaseHas('addresses', $data);

    }

    public function testEdit()
    {
        // // Création Mock
        // $this->mock(Address::class,function ($mock) 
        // {
        //     $mock->shouldReceive('findOrFail')->andReturn('address');
        // });

        //Action
        $response = $this->get(route('addresses.edit', ['id' => $this->address->id]));

        //Assertions
        $response->assertOk();
        $response->assertViewHas('address');
        $response->assertViewIs('addresses.edit');
    }

    public function testUpdate()
    {
        $data = [
            'id' => $this->address->id,
            'address' => $this->address->address,
            'address2' => "update adresse 2",
            'city' => $this->address->city,
            'zip_code' => $this->address->zip_code
        ];

        //Action
        $response = $this->postJson(route('addresses.update',['id' => $this->address->id]),$data);
        
        //Assertions
        $response->assertRedirect(route('addresses.index'));
        $this->assertDatabaseHas('addresses', $data);
    }

    public function testShow()
    {
        // // Création Mock
        // $this->mock(Address::class,function ($mock) 
        // {
        //     $mock->shouldReceive('findOrFail')->andReturn('address');
        // });

        //Action
        $response = $this->get(route('addresses.show', ['id' => $this->address->id]));

        //Assertions
        $response->assertSuccessful();
        $response->assertViewHas('address');
        $response->assertViewIs('addresses.show');
    }

    public function testDestroy()
    {
        $data = [
            'id' => $this->address->id,
            'address' => $this->address->address,
            'address2' => $this->address->address2,
            'city' => $this->address->city,
            'zip_code' => $this->address->zip_code
        ];

        //Action
        $response = $this->postJson(route('addresses.delete',['id' => $this->address->id]), $data);

        //Assertions
        $response->assertRedirect(route('addresses.index'));
        $this->assertDatabaseMissing('addresses',$data);
    }
}
