//   console.log('test')

      const $cards = document.querySelectorAll('.render-html-card')
      $cards.forEach( $card => {
      const $links = $card.querySelectorAll('p > a')
      $links.forEach( $link => {
        $link.setAttribute('class','chr-btn th-bg')
        $link.target = '_blank'
        $link.setAttribute('style', `
        border: none
        `)
      })

      $listItem = $card.querySelectorAll('ul > li')
      $listItem.forEach( item => {
        item.setAttribute('style', `
          white-space: nowrap;
          text-overflow: ellipsis;
          overflow: hidden;
          list-style-position: inside ;
        `)
      })
    })