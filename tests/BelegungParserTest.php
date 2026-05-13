<?php

declare(strict_types=1);

namespace Bansin\Tests;

use Bansin\Cron\BelegungParser;
use PHPUnit\Framework\TestCase;

class BelegungParserTest extends TestCase
{
    private BelegungParser $parser;

    protected function setUp(): void
    {
        $this->parser = new BelegungParser();
    }

    // --- Hilfsmethode ---

    private function fixture(string $name): string
    {
        return (string) file_get_contents(__DIR__ . '/fixtures/' . $name);
    }

    // --- Leere / ungültige Eingaben ---

    public function testReturnsEmptyArrayForEmptyString(): void
    {
        $this->assertSame([], $this->parser->parse(''));
    }

    public function testReturnsEmptyArrayForWhitespaceOnly(): void
    {
        $this->assertSame([], $this->parser->parse('   '));
    }

    public function testReturnsEmptyArrayWhenNoCalendarTable(): void
    {
        $html = '<html><body><p>Kein Kalender hier.</p></body></html>';
        $this->assertSame([], $this->parser->parse($html));
    }

    // --- Grundstruktur ---

    public function testParsesYear(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_simple.html'));
        $this->assertArrayHasKey(2026, $result);
    }

    public function testParsesMonthNames(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_simple.html'));
        $this->assertArrayHasKey('Jan', $result[2026]);
        $this->assertArrayHasKey('Feb', $result[2026]);
    }

    public function testParsesCorrectDayCount(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_simple.html'));
        $this->assertCount(3, $result[2026]['Jan']);
        $this->assertCount(3, $result[2026]['Feb']);
    }

    // --- Status-Werte ---

    public function testParsesReservedStatus(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_simple.html'));
        $this->assertSame('reserved', $result[2026]['Jan'][1]);
    }

    public function testParsesFreeStatus(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_simple.html'));
        $this->assertSame('free', $result[2026]['Jan'][2]);
    }

    public function testParsesArrivalOnlyStatus(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_simple.html'));
        $this->assertSame('arrival_only', $result[2026]['Jan'][3]);
    }

    public function testParsesDepartureOnlyStatus(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_simple.html'));
        $this->assertSame('departure_only', $result[2026]['Feb'][1]);
    }

    public function testParsesAllFourStatuses(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_simple.html'));
        $statuses = array_merge(
            array_values($result[2026]['Jan']),
            array_values($result[2026]['Feb'])
        );
        $this->assertContains('reserved',       $statuses);
        $this->assertContains('free',            $statuses);
        $this->assertContains('arrival_only',    $statuses);
        $this->assertContains('departure_only',  $statuses);
    }

    // --- Mehrere Jahre ---

    public function testParsesTwoYears(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_two_years.html'));
        $this->assertCount(2, $result);
        $this->assertArrayHasKey(2026, $result);
        $this->assertArrayHasKey(2027, $result);
    }

    public function testEachYearHasCorrectMonths(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_two_years.html'));
        $this->assertArrayHasKey('Dez', $result[2026]);
        $this->assertArrayHasKey('Jan', $result[2027]);
    }

    public function testYearsDoNotShareData(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_two_years.html'));
        $this->assertArrayNotHasKey('Jan', $result[2026]);
        $this->assertArrayNotHasKey('Dez', $result[2027]);
    }

    // --- Rauschen ausfiltern ---

    public function testIgnoresMobileTable(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_with_noise.html'));
        // Nur "Mär" aus der Desktop-Tabelle, nicht "Jan" aus der Mobile-Tabelle
        $this->assertArrayHasKey('Mär', $result[2026]);
        $this->assertArrayNotHasKey('Jan', $result[2026]);
    }

    public function testIgnoresLegendTable(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_with_noise.html'));
        // Legend-Tabelle hat kein year-Tag → kein eigener Eintrag
        $this->assertCount(1, $result);
    }

    public function testOnlyDesktopTableDataPresent(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_with_noise.html'));
        $this->assertSame('free',     $result[2026]['Mär'][1]);
        $this->assertSame('reserved', $result[2026]['Mär'][2]);
    }

    // --- Tagnummern-Zuordnung ---

    public function testDayNumbersAreMappedCorrectly(): void
    {
        $result = $this->parser->parse($this->fixture('calendar_simple.html'));
        // Tag 1, 2, 3 müssen als Keys vorhanden sein (nicht 0-basiert)
        $this->assertArrayHasKey(1, $result[2026]['Jan']);
        $this->assertArrayHasKey(2, $result[2026]['Jan']);
        $this->assertArrayHasKey(3, $result[2026]['Jan']);
        $this->assertArrayNotHasKey(0, $result[2026]['Jan']);
    }
}
