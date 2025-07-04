@props([
    'subheading' => 'Nosso Trabalho',
    'heading' => 'Transformando Desafios em Oportunidades',
    'description' => 'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros. Nossa abordagem é baseada em três pilares fundamentais: Análise de Perfil, Planejamento Estratégico e Execução com Suporte Contínuo.',
    'cta_label' => 'Saiba Mais',
    'cta_link' => 'https://example.com/saiba-mais',
    'cards' => [
        [
            'title' => 'Análise de Perfil',
            'description' => 'Entendemos seu perfil financeiro e objetivos.',
            'backgroundImage' => asset('images/stock/office-coworkers.png'),
        ],
        [
            'title' => 'Planejamento Estratégico',
            'description' => 'Criamos um plano personalizado para você.',
            'backgroundImage' => asset('images/stock/office-coworkers.png'),
        ],
        [
            'title' => 'Execução e Suporte',
            'description' => 'Acompanhamos a execução do plano com suporte contínuo.',
            'backgroundImage' => asset('images/stock/office-coworkers.png'),
        ],
    ],
])

<!-- "Nosso Atendimento" Section -->
<section id="nosso-atendimento"
         class="mx-auto bg-linear-to-br from-base-100 via-base-200 to-base-100 text-base-content py-28 overflow-hidden">
    <div class="container mx-auto max-w-7xl px-6 lg:flex lg:items-start lg:justify-between lg:space-x-12 relative z-10">
        <!-- Coluna da Esquerda -->
        <div class="lg:w-1/2 mb-12 lg:mb-0">
            <!-- Small Label -->
            <div
                class="inline-block bg-base-200 backdrop-blur-xl px-4 py-1 rounded-md mb-4 shadow border border-primary fadeIn">
                <span class="text-sm text-primary font-semibold">{{ $subheading }}</span>
            </div>
            <!-- Main Heading -->
            <h2 class="text-base-content font-bold text-4xl sm:text-5xl  leading-tight mb-6 tracking-tight">
                {{ $heading }}
            </h2>
            <!-- Descriptive Paragraph -->
            <p class="text-base-content/90 mb-8 max-w-xl leading-relaxed">
                {{ $description }}
            </p>
            <!-- CTA: "Saiba Mais" with Circle + Arrow -->
            <a href="{{ $cta_link }}"
               class="inline-flex items-center space-x-3 group mt-4 bg-primary pl-10 pr-10 pt-3 pb-3 rounded-md shadow-md">
                                        <span
                                            class="uppercase text-md tracking-widest text-primary-content transition font-semibold">
                                            {{ $cta_label }}
                                        </span>
            </a>
        </div>

        <!-- Coluna da Direita: Cards -->
        <div class="lg:w-1/2 relative pb-10 md:pl-10">
            <!-- Um único elemento L para toda a seção -->
            <div class="hidden md:block md:absolute bottom-0 left-0">
                <div class="w-32 h-[13px] bg-primary rounded-bl-md"></div>
                <div class="absolute bottom-0 left-0 h-32 w-[13px] bg-primary rounded-bl-md"></div>
            </div>

            <!-- Área dos cards -->
            <div class="space-y-10">
                @foreach($cards as $index => $card)
                    <x-cards.base-card
                        :title="$card['title']"
                        :description="$card['description']"
                        :backgroundImage="$card['backgroundImage']"
                    />
                @endforeach
            </div>
        </div>
    </div>
</section>
