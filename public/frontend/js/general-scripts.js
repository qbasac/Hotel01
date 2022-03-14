//   console.log('test')

      const $cards = document.querySelectorAll('.render-html-card')
      $cards.forEach( $card => {

      const $links = $card.querySelectorAll('p > a')
      $links.forEach( $link => {
        $link.setAttribute('class','chr-btn fancy-btn')
        $link.target = '_blank'

      })

      $listItem = $card.querySelectorAll('h2')
      $listItem.forEach( item => {
        item.setAttribute('class','title')
      })

      $listItem = $card.querySelectorAll('li')
      $listItem.forEach( item => {
        item.setAttribute('class','chr-sr-list')
        item.setAttribute('style', `
        width: 100% !important;
        margin: 0 0 6px 0 !important;
        `)
      })

      $listItem = $card.querySelectorAll('ul')
      $listItem.forEach( item => {
        item.setAttribute('class','chr-sr-list')
        item.setAttribute('style', `
        width: 100% !important;
        `)
      })
    })

    const $cardPrice = document.querySelectorAll('.render-html-price')
    $cardPrice.forEach( $cardPrice => {

    const $links = $cardPrice.querySelectorAll('p > a')
    $links.forEach( $link => {
      $link.setAttribute('class','chr-btn fancy-btn')
      $link.target = '_blank'
      $link.setAttribute('style', `
      list-style: none !important;
        `)
      })

      $listItem = $cardPrice.querySelectorAll('ul')
      $listItem.forEach( item => {
        item.setAttribute('style', `
        list-style: none !important;
        padding-bottom: 10px;
        margin-inline-start: 0px;
        `)
      })
    })



